<?php
class Home extends BaseController{
	protected function index(){
		$viewmodel = "just a basic string";
		$this->ReturnView($viewmodel, true);
	}
}
?>