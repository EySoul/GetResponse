<?php

class DictInstitution_model extends model 
{

  public function get_data() 
  {
    $return = array();
    $return['title'] = 'Model';
    $return['table'] = self::table();
    
    return $return;
  }
  
  // модель для запроса из бд при загрузке основного представления        
  function table() {
    $url = '/contingent/d/institution';
    $return = sys::getResponse($url);

    return $return;
  }
  
  // модель для удалени
}
