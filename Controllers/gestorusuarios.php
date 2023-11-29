<?php
//============================================================+
// Carpeta: Controllers
// Nombre del archivo   : gestorusuarios.php
// Inicio       : 2023-11-22
// Ultima actualizacion :
//
// Description : controlador para manejar el Gestor de Usuarios de la app
//
// Author: Jose Carlos Avila Perea
//
// (c) Copyright:
//                    josecarlos.avilaperea@gmail.com
//============================================================+

require_once('DAO/UsuarioDao.php');
class GestorUsuarios
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

	public function gestorUsuarios()
	{
		$data['page_tag'] = 'GestorUsuarios';
		$data['page_title'] = 'Gestor de usuarios';
		$data['page_name'] = 'Gestor de usuarios';
		$data['page_functions_js'] = 'function_gestorusuarios.js';

		$this->views->getView($this, "gestorusuarios", $data);
	}

	//Metodo para obtener todos los usuarios
	public function obtenerUsuariosController()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {

			$usuarioDAO = new UsuarioDAO();
			$arrData = $usuarioDAO->obtenerUsuarios();

			$arrRespuesta = array('status' => 'success', 'data' => $arrData);
		} else {
			$arrRespuesta = array('status' => 'error', 'msg' => 'La peticion HTTP, no corresponde al método');
		}
		echo json_encode($arrRespuesta, JSON_UNESCAPED_UNICODE);
		die();
	}
}
