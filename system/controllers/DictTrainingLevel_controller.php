<?php
class DictTrainingLevel_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictTrainingLevel_model.php";
		$this->model = new DictTrainingLevel_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictTrainingLevel_view.php', 'default_view.php', $data);
	}
  
}
?>