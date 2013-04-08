<?php
/*
* DESC: abstract class which controllers use to extend
*/

abstract class BaseController{
	protected $urlValues;
	protected $action;
	protected $model;
	protected $view;

	public function __construct($action, $urlValues){
		$this->action = $action;
		$this->urlValues = $urlValues;

		//create a new View
		$this->view = new View(get_class($this), $action);
	}
	
	public function ExecuteAction(){
		return $this->{$this->action}();
	}
}
?>