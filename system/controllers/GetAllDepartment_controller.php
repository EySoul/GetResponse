<?php
class GetAllDepartment_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/GetAllDepartment_model.php";
		$this->model = new GetAllDepartment_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('GetAllDepartment_view.php', 'default_view.php', $data);
	}
  
}
?>