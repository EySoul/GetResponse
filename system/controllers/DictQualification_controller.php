<?php
class DictQualification_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictQualification_model.php";
		$this->model = new DictQualification_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictQualification_view.php', 'default_view.php', $data);
	}
  
}
?>