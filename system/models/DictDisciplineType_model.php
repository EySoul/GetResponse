<?php

class DictDisciplineType_model extends model 
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

  $URLget = "/d/disciplinetype";
  $return = sys::getResponse($URLget);
  return $return;
  }
  
  // модель для удалени
}
