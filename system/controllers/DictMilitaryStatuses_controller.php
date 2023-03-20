<?php
class DictMilitaryStatuses_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictMilitaryStatuses_model.php";
		$this->model = new DictMilitaryStatuses_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictMilitaryStatuses_view.php', 'default_view.php', $data);
	}
  
}
?>