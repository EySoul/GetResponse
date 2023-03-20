<?php
class DictHealth_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictHealth_model.php";
		$this->model = new DictHealth_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictHealth_view.php', 'default_view.php', $data);
	}
  
}
?>