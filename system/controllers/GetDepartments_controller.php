<?php
class GetDepartments_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/GetDepartments_model.php";
		$this->model = new GetDepartments_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('GetDepartments_view.php', 'default_view.php', $data);
	}
  
}
?>