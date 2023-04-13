<?php
class DictOrdersCategoryID_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictOrdersCategoryID_model.php";
		$this->model = new DictOrdersCategoryID_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		include('system/views/DictOrdersCategoryID_view.php');
	}
  
}
?>