<?php
class DictLanguages_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictLanguages_model.php";
		$this->model = new DictLanguages_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictLanguages_view.php', 'default_view.php', $data);
	}
  
}
?>