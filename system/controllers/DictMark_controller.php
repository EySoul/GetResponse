<?php
class DictMark_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictMark_model.php";
		$this->model = new DictMark_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictMark_view.php', 'default_view.php', $data);
	}
  
}
?>