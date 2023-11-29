<?php
//============================================================+
// Carpeta: Controllers
// Nombre del archivo   : home.php
// Inicio       : 2023-11-22
// Ultima actualizacion :
//
// Description : controlador para manejar el home de la app
//
// Author: Jose Carlos Avila Perea
//
// (c) Copyright:
//                    josecarlos.avilaperea@gmail.com

//============================================================+


class Home
{

	protected $views;

	public function __construct()
	{
		session_start();
		$this->views = new Views();
		if (validarSesionPorPeticion($_SESSION, $_POST, $_GET, $_FILES)) {
			header('Location: ' . base_url() . "/Logout");
		}
	}

	public function home()
	{
		$_SESSION['login'] = true;
		$data['page_tag'] = 'Home';
		$data['page_title'] = 'Home';
		$data['page_name'] = 'Pagina principal';
		$data['page_functions_js'] = 'function_home.js';

		$this->views->getView($this, "home", $data);
	}
}
