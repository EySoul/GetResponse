<?php

class abits_model extends model 
{

  public function get_data() 
  {
    $return = array();
    $return['title'] = 'Школьники';
    $return['table'] = self::table();
    
    return $return;
  }
  
  // модель для запроса из бд при загрузке основного представления        
  function table() {
    $return = 1;

    return $return;
  }
  
  // модель для удалени
}
