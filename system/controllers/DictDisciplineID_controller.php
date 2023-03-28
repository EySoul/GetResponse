<?php
class DictDisciplineID_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictDisciplineID_model.php";
		$this->model = new DictDisciplineID_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictDisciplineID_view.php', 'default_view.php', $data);
	}
  
}
?>