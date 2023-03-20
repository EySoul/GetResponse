<?php
class abits_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/abits_model.php";
		$this->model = new abits_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления /abits
	function index(){
		$data = $this->model->get_data();
		$this->view->render('abits_view.php', 'default_view.php', $data);
	}
  
}
?>