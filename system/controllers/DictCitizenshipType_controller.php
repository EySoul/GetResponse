<?php
class DictCitizenshipType_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictCitizenshipType_model.php";
		$this->model = new DictCitizenshipType_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictCitizenshipType_view.php', 'default_view.php', $data);
	}
  
}
?>