<?php
class GetAllDictTrainingLevel_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/GetAllDictTrainingLevel_model.php";
		$this->model = new GetAllDictTrainingLevel_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('GetAllDictTrainingLevel_view.php', 'default_view.php', $data);
	}
  
}
?>