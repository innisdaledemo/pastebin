<?php

App::uses('AppController', 'Controller');

class AppControllerTest extends ControllerTestCase{

public function testHasSessionConponent(){
	$Controller = $this->generate('App');
	$this->assertArrayHasKey('Session', get_object_vars($Controller));
}

}

?>