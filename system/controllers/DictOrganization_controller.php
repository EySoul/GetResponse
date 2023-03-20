<?php
class DictOrganization_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictOrganization_model.php";
		$this->model = new DictOrganization_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictOrganization_view.php', 'default_view.php', $data);
	}
  
}
?>