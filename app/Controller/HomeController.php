<?php

class HomeController extends AppController {
    public function index(){
		return $this->redirect(array(
	    	'controller' => 'home',
	    	'action' => 'homepage'));
    }

    public function homepage(){
		$this->set('title', "Ma page d'accueil");
		$this->set('description', "Ceci est une page faite pour google analytics");
	}
}
