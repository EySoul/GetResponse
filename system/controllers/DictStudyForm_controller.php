<?php
class DictStudyForm_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictStudyForm_model.php";
		$this->model = new DictStudyForm_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictStudyForm_view.php', 'default_view.php', $data);
	}
  
}
?>