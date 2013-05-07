<?php
class MenusController extends AppController{
     
	var $name = 'Menus';
	
     
	function index(){
		$menus = $this->paginate();
		
		return $menus;
	}
}
?>
