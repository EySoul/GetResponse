<?php

class DictQualificationID_model extends model 
{

  public function get_data() 
  {
    $return = array();
    $return['title'] = 'Model';
    $return['table'] = self::table();
    
    return $return;
  }
  
  function table() {
    if(conf::$TOKEN == null)
    sys::gettoken();
  $URLget = "/d/qualification/".$_GET["id"];
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
  
}
