<?php
class DictControlAction_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictControlAction_model.php";
		$this->model = new DictControlAction_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictControlAction_view.php', 'default_view.php', $data);
	}
  
}
?>