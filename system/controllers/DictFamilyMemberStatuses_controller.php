<?php
class DictFamilyMemberStatuses_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictFamilyMemberStatuses_model.php";
		$this->model = new DictFamilyMemberStatuses_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictFamilyMemberStatuses_view.php', 'default_view.php', $data);
	}
  
}
?>