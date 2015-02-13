<?php

class AdminController extends BaseController {

	private $_login = null;
	private $_pagina = null;
	
	public function __construct()
	{
		$this->_login = false;
		$this->_pagina = '';
	}

	public function getIndex()
	{
		$this->_pagina = ' - Inicio';
		return View::make('admin.index')->with('pagina', $this->_pagina);
	}
	
	public function getLogin()
	{
		$this->_login = true;
		$this->_pagina = ' - Login';
		// borrar session y demas datos bla bla bla
		return View::make('admin/login')->with('pagina', $this->_pagina)
										->with('login', $this->_login);
	}
	
	public function postLogin()
	{
		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		try
		{
			$user = Sentry::authenticate($credentials, false);
			if ($user) {
				return Redirect::route('admin.index');
			}
		}
		catch(\Exception $e)
		{
			return Redirect::route('login')
					->withErrors(array('login' => $e->getMessage()));
		}
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
