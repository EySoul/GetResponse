<?php
class DictIdentificationType_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictIdentificationType_model.php";
		$this->model = new DictIdentificationType_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictIdentificationType_view.php', 'default_view.php', $data);
	}
  
}
?>