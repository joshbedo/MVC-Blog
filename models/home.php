<?php
/*
* File: models/home.php
* Desc: model for the home controller
*/
class HomeModel extends BaseModel{
	//data passed to the home index view
	public function index(){
		$this->viewModel->set("pageTitle", "MVC patterns");
		return $this->viewModel;
	}
}
?>