<?php
class DictInstitution_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictInstitution_model.php";
		$this->model = new DictInstitution_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictInstitution_view.php', 'default_view.php', $data);
	}
  
}
?>