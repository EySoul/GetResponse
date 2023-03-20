<?php
class DictBenefit_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictBenefit_model.php";
		$this->model = new DictBenefit_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictBenefit_view.php', 'default_view.php', $data);
	}
  
}
?>