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

}

