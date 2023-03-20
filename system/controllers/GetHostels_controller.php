<?php
class GetHostels_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/GetHostels_model.php";
		$this->model = new GetHostels_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('GetHostels_view.php', 'default_view.php', $data);
	}
  
}
?>