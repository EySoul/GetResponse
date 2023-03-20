<?php
class DisciplineType_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DisciplineType_model.php";
		$this->model = new DisciplineType_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DisciplineType_view.php', 'default_view.php', $data);
	}
  
}
?>