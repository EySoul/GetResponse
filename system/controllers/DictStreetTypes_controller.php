<?php
class DictStreetTypes_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictStreetTypes_model.php";
		$this->model = new DictStreetTypes_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictStreetTypes_view.php', 'default_view.php', $data);
	}
  
}
?>