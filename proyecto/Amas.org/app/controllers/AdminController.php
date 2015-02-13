<?php

class AdminController extends BaseController {

	private $_login = null;
	private $_pagina = null;
	
	public function __construct()
	{
		$this->_login = false;
		$this->_pagina = '';
	}

	public function getLogin()
	{
		$this->_login = true;
		$this->_pagina = ' - Login';
		// borrar session y demas datos bla bla bla
		return View::make('admin/login')->with('pagina', $this->_pagina)
										->with('login', $this->_login);
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
