<?php
class GetAllDictStudyForm_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/GetAllDictStudyForm_model.php";
		$this->model = new GetAllDictStudyForm_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('GetAllDictStudyForm_view.php', 'default_view.php', $data);
	}
  
}
?>