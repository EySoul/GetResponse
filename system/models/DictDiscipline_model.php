<?php

class DictDiscipline_model extends model 
{

  public function get_data() 
  {
    $return = array();
    $return['title'] = 'Model';
    if(empty($_GET["id"]))
    {
      $return['table'] = self::table();
      return $return;
    }

    $return['table'] = self::table($_GET["id"]);
    return $return;

  }
  
  // модель для запроса из бд при загрузке основного представления        
  function table($id = null) {

  $URLget = "/d/discipline/".$id;

  $return = sys::getResponse($URLget);

  return $return;
  }
  public function get_idData($id){

    $URLget = "/d/discipline/".$id;
    
    $return = sys::getResponse($URLget);

    return $return;

  }
  
  // модель для удалени
}
