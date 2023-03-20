<?php
class DictAdditionalFields_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictAdditionalFields_model.php";
		$this->model = new DictAdditionalFields_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictAdditionalFields_view.php', 'default_view.php', $data);
	}
  
}
?>