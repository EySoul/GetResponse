<?php
class DictStudyLevel_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictStudyLevel_model.php";
		$this->model = new DictStudyLevel_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictStudyLevel_view.php', 'default_view.php', $data);
	}
  
}
?>