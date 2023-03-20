<?php
class DictOrdersCategory_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictOrdersCategory_model.php";
		$this->model = new DictOrdersCategory_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictOrdersCategory_view.php', 'default_view.php', $data);
	}
  
}
?>