<?php
class GetAllDictStudyFormType_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/GetAllDictStudyFormType_model.php";
		$this->model = new GetAllDictStudyFormType_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('GetAllDictStudyFormType_view.php', 'default_view.php', $data);
	}
  
}
?>