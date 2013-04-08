<?php
class View{
	protected $viewFile;

	//establish view location on object creation
	public function __construct($controllerClass, $action){
		$controllerClass = str_replace("Controller", "", $controllerClass);
		$this->viewFile = "views/" . $controllerName . "/" . $action . ".php";
	}	

	//output the view
	public function output($viewModel, $template = "maintemplate"){
		$templateFile = "views/".$template.".php";

		if(file_exists($this->viewFile)){
			if($template){
				//includes the full template
				if(file_exists($templateFile)){
					require($templateFile);
				}else{
					require("views/error/badtemplate.php");
				}
			}else{
				//we're not using a template view s just output the methods view directly
				require($this->viewFile);
			}
		}else{
			require("views/error/badview.php");
		}
	}
}
?>