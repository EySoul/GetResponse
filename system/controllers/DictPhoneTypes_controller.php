<?php
class DictPhoneTypes_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictPhoneTypes_model.php";
		$this->model = new DictPhoneTypes_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictPhoneTypes_view.php', 'default_view.php', $data);
	}
  
}
?>