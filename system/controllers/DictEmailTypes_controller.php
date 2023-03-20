<?php
class DictEmailTypes_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictEmailTypes_model.php";
		$this->model = new DictEmailTypes_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictEmailTypes_view.php', 'default_view.php', $data);
	}
  
}
?>