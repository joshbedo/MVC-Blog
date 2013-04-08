<?php
/*
* File: /controllers/home.php
* Desc: controller for the home page
*/
class HomeController extends BaseController{
	public function __construct($action, $urlValues){
		parent::__construct($action, $urlValues);

		//create the model object
		require("models/home.php");
		$this->model = new HomeModel();
	}

	//default method
	protected function index(){
		$this->view->output($this->model->index());
	}
}
?>