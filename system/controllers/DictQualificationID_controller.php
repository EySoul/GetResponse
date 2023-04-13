<?php
class DictQualificationID_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictQualificationID_model.php";
		$this->model = new DictQualificationID_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		include('system/views/DictQualificationID_view.php');
	}
  
}
?>