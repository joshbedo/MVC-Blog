<?php
/*
* File: /classes/basemodel.php
* Desc: abstract class which models extend
*/
class BaseModel{
	protected $viewModel;

	//create the base utility objects available to all models on model creation
	public function __construct(){
		$this->viewModel = new ViewModel();
		$this->commonViewData();
	}

	//establish viewModel data that is required for all views in this method ex: the main template
	protected function commonViewData(){
		//$this->viewModel->set("mainMenu", array("home" => "/home", "About" => "/about"));
	}
}
?>