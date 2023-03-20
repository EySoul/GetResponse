<?php
class DictCitizenship_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictCitizenship_model.php";
		$this->model = new DictCitizenship_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictCitizenship_view.php', 'default_view.php', $data);
	}
  
}
?>