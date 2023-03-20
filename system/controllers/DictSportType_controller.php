<?php
class DictSportType_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictSportType_model.php";
		$this->model = new DictSportType_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictSportType_view.php', 'default_view.php', $data);
	}
  
}
?>