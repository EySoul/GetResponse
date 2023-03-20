<?php
class DictSportCategory_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictSportCategory_model.php";
		$this->model = new DictSportCategory_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictSportCategory_view.php', 'default_view.php', $data);
	}
  
}
?>