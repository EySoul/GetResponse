<?php
class DictOrderTypes_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictOrderTypes_model.php";
		$this->model = new DictOrderTypes_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictOrderTypes_view.php', 'default_view.php', $data);
	}
  
}
?>