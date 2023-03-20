<?php
class DictDisciplineType_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictDisciplineType_model.php";
		$this->model = new DictDisciplineType_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictDisciplineType_view.php', 'default_view.php', $data);
	}
  
}
?>