<?php
/*
* File: /classes/viewmodel.php
* Desc: class for optional data returned by model methods which the controller sends to the view
*/
class ViewModel{

	//dynamically add a property or method to the ViewModel instance
	public function set($name, $val){
		$this->$name = $val;
	}

	//returns the requested property value
	public function get($name){
		if(isset($this->{$name})){
			return $this->{$name};
		}else{
			return null;
		}
	}
}
?>