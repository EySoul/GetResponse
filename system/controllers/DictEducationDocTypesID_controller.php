<?php
class DictEducationDocTypesID_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictEducationDocTypesID_model.php";
		$this->model = new DictEducationDocTypesID_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		include('system/views/DictEducationDocTypesID_view.php');
	}
  
}
?>