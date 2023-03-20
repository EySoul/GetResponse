<?php
class DictMilitaryDocTypes_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictMilitaryDocTypes_model.php";
		$this->model = new DictMilitaryDocTypes_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictMilitaryDocTypes_view.php', 'default_view.php', $data);
	}
  
}
?>