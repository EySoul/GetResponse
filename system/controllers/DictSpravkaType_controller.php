<?php
class DictSpravkaType_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictSpravkaType_model.php";
		$this->model = new DictSpravkaType_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictSpravkaType_view.php', 'default_view.php', $data);
	}
  
}
?>