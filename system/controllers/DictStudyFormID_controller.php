<?php
class DictStudyFormID_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictStudyFormID_model.php";
		$this->model = new DictStudyFormID_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		include('system/views/DictStudyFormID_view.php');
	}
  
}
?>