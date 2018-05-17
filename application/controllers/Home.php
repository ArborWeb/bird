<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends WebController {

	public function index()
	{
		$this->loadView('welcome_message');
	}
}
