<?php

class sys {

  static $mysqli, $mssql_link,$PDO;

  

  /**
   * Установка переменных сессии
   * Если есть n_token сессии и $cookie_set=true, сохраняем сессию в базу и обновляем n_token
   * @param type $var
   * @param type $val
   * @param type $cookie_set
   */
  static function session_set($var,$val,$cookie_set=true){
    $_SESSION['abitprof'][$var]=$val;

    if($cookie_set && isset($_COOKIE['n_token'])){
      // Установим куки
      sys::cookie_set();
    }
  }
  
  static function cookie_set(){
    $user_id=(int)sys::session('user_id');
//      $is_super_user=empty(sys::session('is_super_admin'))?0:1;
    if(!empty($user_id)){
      $expire=time()+conf::$SESSION_TIME;
      $token=hash('sha256', $user_id.microtime());
      $ip=$_SERVER['REMOTE_ADDR'];
      $agent=mb_substr($_SERVER['HTTP_USER_AGENT'],0,1000);

      $session='';
      $i=0;
      foreach($_SESSION['abitprof'] as $k=>$v){
        if($i++ !== 0){$session.=",";}
        $session.="$k=$v";
      }

      $sql="update user_session set active=0 where user_id=:user_id and site=:site and ip=:ip and agent=:agent";
      $q=sys::$PDO->prepare($sql);
      $q->execute(array('user_id'=>$user_id,'site'=>conf::$SITE_URL_SHORT,'ip'=>$ip,'agent'=>$agent));

      $sql="insert into user_session (user_id,token,ip,session,agent,date_create,active,site) values (:user_id,:token,:ip,:session,:agent,getdate(),1,:site)";
      $q=sys::$PDO->prepare($sql);
      $q->execute(array('user_id'=>$user_id,'token'=>$token,'ip'=>$ip,'session'=>$session,'agent'=>$agent,'site'=>conf::$SITE_URL_SHORT));

      setcookie('n_token', $token, $expire, $path='/', $domain='', $secure=false, $httponly=true);
    }
  }
  
  static function cookie_reset(){
    setcookie('n_token', '', strtotime('01.01.2000'), $path='/', $domain='');
  }
  
  static function session($var){
    if(isset($_SESSION['abitprof'][$var])){
      return $_SESSION['abitprof'][$var];
    }else{
      return FALSE;
    }
  }
  
  /**
   * Находится ли текущий пользователь в одной из групп, переданных в $groups
   * @param string $groups Группы через запятую
   * @return boolean
   */
  static function user_in_group($groups){
    $R=false;
    
    $Groups=explode(',',$groups);
    
    $UG=sys::user_group();  // Массив с правами пользователя
    
    foreach($Groups as $group){
      if(isset($UG[$group])){
        $R=true;
        break;
      }
    }
    return $R;
  }
  
  //Проверка на супер админа
  static function is_super_admin(){
    if (!empty(sys::session('is_super_admin')))
      return true;
    else
      return false;
  }
  
  /**
   * Возвращает массив статусов пользователя
   * Сейчас у каждого пользователя возможен только один статус, 
   * однако массив сделан на всякий случай на будущее, для более гибкой настройки
   * Возможные статусы: admin,user,reader
   * Таблица статусов: user_group
   * @return array Например: array['user']=true
   */
  static function user_group(){
    $R=array();
    $R[sys::session('user_status')]=true;
    return $R;
  }
  
  /**
   * Версия по времени изменения файла для предотвращения кэширования
   * @return string 4 последних символа (секунды) 
   */
  static function version(){
    $version='';
    $filename=conf::$SITE_PATH.'.deployment';
    if(file_exists($filename)){
      $filetime=filemtime ( $filename );
      $version=substr($filetime, -4);
    }
    
    return $version;
  }
  
  static function gettoken()
  {
    $crl = curl_init();

    curl_setopt($crl,CURLOPT_HTTPHEADER, conf::$TOKEN_HEADERS);
    curl_setopt($crl,CURLOPT_URL, conf::$TOKEN_URL);
    curl_setopt($crl,CURLOPT_POST,true);
    curl_setopt($crl,CURLOPT_POSTFIELDS,conf::$TOKEN_BODY);
    curl_setopt($crl,CURLOPT_RETURNTRANSFER,true);
    $res = curl_exec($crl);
    curl_close($crl);

    $uncodeToken = json_decode($res)->access_token;
    conf::$TOKEN = $uncodeToken;
  }


  static function viewTwoLevelIdTable($table,$SecLevelName = null)
  {
    $result ='';
    $nextLevelTable = array();
  
    $result .= '<table class="table table-bordered">';
    $result .= '<tr>';
    foreach ($table as $key => $value) {
      $result .= '<th>'.$key.'</th>';
    }
    
    $result .= '</tr><tr>';

    foreach ($table as $key => $value) {
      if(is_object($value))
      {
        $nextLevelTable[] = '<td colspan="7" class="table-secondary"><table class="table border-white"><tr>'.
        self::_getForEachHtml($value,'<th>','</th>',false).'</tr><tr>'.self::_getForEachHtml($value,'<td>','</td>',true);
        $result .= '<td>==></td>';
        continue;
      }
      else if($key == $SecLevelName)
      {
        $result .= '
        <td><button value="'.$value.'" id="show_element" class="btn btn-primary show_element" data-bs-toggle="modal" data-bs-target="#'.$key.'">
        '.$value.'
        </button>
        </td>';
        
      }
      $result .= '<td>'.$value.'</td>';
    }
    $result .= '</tr>';
    foreach ($nextLevelTable as $key ) {
      $result .= $key;
    }
     $result .= '</table>';
     
    return $result;
 
  
  }

  static function viewTwoLevelTable($table,$SecLevelName)
  {
    $url = basename($_SERVER['REQUEST_URI']);
    $url = parse_url($url);
    $url = $url['path'];
    $result ='';
    $nextLevelTable = array();
    $modelview = array();
  
    $result .= '<table class="table table-bordered">';
    $result .= '<tr>';
    foreach ($table[0] as $key => $value) {
      $result .= '<th>'.$key.'</th>';
    }
    $counter = 0;
  
   foreach ($table as $num) {
    $result .= '<tr>';
      foreach ($num as $el => $field) {
        
    $counter++;
        if(is_object($field)){
          $result .= '
          <td>
          <button  class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#'.$el.$counter.'" aria-expanded="false" aria-controls="'.$el.$counter.'" >Доп таблица</button>
          </td>';
          $nextLevelTable[]='
          <tr><td class="collapse table-secondary" id="'.$el.$counter.'" colspan ="7">
          <table class="table border-white">
          <tr>
          '.self::_getForEachHtml($field,'<th>','</th>',false).'
          </tr>
          <tr>'
          .self::_getForEachHtml($field,'<td>','</td>',true).'
          </tr>
          </table>
          </td>
          </tr>'; 
        }
        else if($el == $SecLevelName)
        {
          $result .= '
          <td><button value="'.$field.'" type="button" class="btn btn-primary show_element" data-bs-toggle="modal" data-bs-target="#'.$el.'">
            '.$field.'
          </button></td>';
          
        }
        else{
          $result .= '
          <td>'.$field.'</td>
          ';
        }
      }
      $result .= '</tr>';
      foreach ($nextLevelTable as $value) {
        $result .= $value;
      }
      $nextLevelTable = null;
  
    }

    $result .= '</table>';
    return $result;
  
  }

  static function viewDefaultTable($table)
  {
    $result  = '';
    $result .='<table class="table table-bordered">';
    $result .='<tr>';
      foreach ($table[0] as $key => $value) {
        $result .= '<th>'.$key.'</th>';
      }
      $result .= '</tr>';
    
    
      foreach ($table as $num) {
        $result .= '<tr>';
        foreach ($num as $el => $field) {
          if(is_array($field)){
            $result .= '
            <td>'.implode($field).'</td>
            ';
            continue;
          }
          $result .= '
          <td>'.$field.'</td>
          ';
        }
        $result .= '</tr>';
      }
      $result .= '</table>';
      return $result;
  }
  static function getResponse($URLget)
  {
     if(conf::$TOKEN == null)
      sys::gettoken();
    $header = array(
      "Content-Type: application/x-www-form-urlencoded",
      "Authorization: Bearer ".conf::$TOKEN
    );
    $crl = curl_init();
  
    curl_setopt($crl,CURLOPT_HTTPHEADER ,$header);
    curl_setopt($crl,CURLOPT_URL , conf::$BASE_URL . $URLget);
    curl_setopt($crl,CURLOPT_RETURNTRANSFER , true);
    curl_setopt($crl,CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($crl,CURLOPT_POSTFIELDS,conf::$TOKEN_BODY);
  
    $res = curl_exec($crl);
    
    $return = json_decode($res);
  
    return $return;
  }

  static function _getForEachHtml($field,$start,$end,$val = false)
  {
    $result = '';
    if(!$val)
    {
      foreach ($field as $key => $value) {

        $result .=$start;
        $result .=$key; 
        $result .=$end;
        
      }
      return $result;
    }
    foreach ($field as $key => $value) {
      if(is_array($value))
        {
          $result.=$start; 
          $result.=implode($value);
          $result.=$end;
          continue;
        }
      if(is_object($value)){
        $result .=$start;
        $result .= '</tr><tr><td colspan="7" class = ><table></td></tr>';
        $result .=$end;
        continue;
      }
      $result.=$start; 
      $result.=$value;
      $result.=$end;
    }
    return $result;

  }

}

