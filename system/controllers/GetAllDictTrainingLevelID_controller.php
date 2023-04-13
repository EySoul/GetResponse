<?php
class GetAllDictTrainingLevelID_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/GetAllDictTrainingLevelID_model.php";
		$this->model = new GetAllDictTrainingLevelID_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		include('/system/views/GetAllDictTrainingLevelID_view.php');
	}
  
}
?>