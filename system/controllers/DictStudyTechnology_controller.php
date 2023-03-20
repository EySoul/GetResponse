<?php
class DictStudyTechnology_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictStudyTechnology_model.php";
		$this->model = new DictStudyTechnology_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictStudyTechnology_view.php', 'default_view.php', $data);
	}
  
}
?>