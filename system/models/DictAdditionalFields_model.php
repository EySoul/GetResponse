<?php

class DictAdditionalFields_model extends model 
{

  public function get_data() 
  {
    $return = array();
    $return['title'] = 'Model';
    $return['table'] = self::table();
    
    return $return;
  }
  

  function table() {
    $URLget = "/contingent/d/additionalfields";
    
    $return = sys::getResponse($URLget);

    return $return;
  }
  
  // модель для удалени
}
