<?php

class DictDiscipline_model extends model 
{

  public function get_data($id = null) 
  {
    $return = array();
    $return['title'] = 'Model';
    $return['table'] = self::table($id);
    
    return $return;
  }
  
  // модель для запроса из бд при загрузке основного представления        
  function table($id) {
    if(conf::$TOKEN == null)
    sys::gettoken();
  // $token = sys::gettoken();
  $URLget = "/d/discipline/".$id;
  $header = array(
    "Content-Type: application/x-www-form-urlencoded",
    "Authorization: Bearer ".conf::$TOKEN
  );
  $crl = curl_init();

  curl_setopt($crl,CURLOPT_HTTPHEADER ,$header);
  curl_setopt($crl,CURLOPT_URL , conf::$BASE_URL . $URLget);
  curl_setopt($crl,CURLOPT_RETURNTRANSFER , true);
  curl_setopt($crl, CURLOPT_CUSTOMREQUEST, 'GET');
  curl_setopt($crl,CURLOPT_POSTFIELDS,conf::$TOKEN_BODY);

  $res = curl_exec($crl);
  
  $return = json_decode($res);

  return $return;
  }
  
  // модель для удалени
}
