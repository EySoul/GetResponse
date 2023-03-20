<?php
class DictCityTypes_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictCityTypes_model.php";
		$this->model = new DictCityTypes_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictCityTypes_view.php', 'default_view.php', $data);
	}
  
}
?>