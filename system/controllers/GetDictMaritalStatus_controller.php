<?php
class GetDictMaritalStatus_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/GetDictMaritalStatus_model.php";
		$this->model = new GetDictMaritalStatus_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('GetDictMaritalStatus_view.php', 'default_view.php', $data);
	}
  
}
?>