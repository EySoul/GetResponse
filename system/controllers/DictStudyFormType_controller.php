<?php
class DictStudyFormType_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictStudyFormType_model.php";
		$this->model = new DictStudyFormType_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictStudyFormType_view.php', 'default_view.php', $data);
	}
  
}
?>