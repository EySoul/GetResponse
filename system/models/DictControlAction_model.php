<?php

class DictControlAction_model extends model 
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

    $URLget = "/d/controlaction";

    $return = sys::getResponse($URLget);

    return $return;
  }
  
  // модель для удалени
}
