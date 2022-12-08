<?php

class Controller{
	//Ana Kontrolcü
	protected $load = array();
	
	public function __construct(){
		$this->load = new Load();
	}
}


?>