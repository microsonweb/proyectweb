<?php
class SlidersFilesController extends AppController{
	
	public $helpers = array('Html','Form');
	public $components = array('Session');
	
	
	
	public function display(){
	$this->set('title_for_layout', 'Fortuna Servicio Técnico Vial' );
		}
	public function index(){
		$this->set('SlidersFiles', $this->SlidersFile->find ('all') );
	}
		
		
}
?>