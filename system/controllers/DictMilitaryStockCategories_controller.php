<?php
class DictMilitaryStockCategories_controller extends Controller{
  // конструктор
  function __construct(){
    
		include "system/models/DictMilitaryStockCategories_model.php";
		$this->model = new DictMilitaryStockCategories_model();
		$this->view = new View();
	}
  // действие по умолчанию при загрузке основного представления 
	function index(){
		$data = $this->model->get_data();
		$this->view->render('DictMilitaryStockCategories_view.php', 'default_view.php', $data);
	}
  
}
?>