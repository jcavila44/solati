<?php
//============================================================+
// Carpeta: Controllers
// Nombre del archivo   : logout.php
// Inicio       : 2023-11-22       : 2021-11-04
// Ultima actualizacion :
//	
// Description : controlador para manejar el logout de la app
//
// Author: Jose Carlos Avila Perea
//
// (c) Copyright:
//                    josecarlos.avilaperea@gmail.com

//============================================================+
class Logout
{
	public function __construct()
	{
		session_start();
		session_unset();
		session_destroy();
		header('location: ' . base_url() . 'login');
	}
}
