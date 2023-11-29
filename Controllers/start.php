<?php
//============================================================+
// Carpeta: Controllers
// Nombre del archivo   : start.php
// Inicio       : 2023-11-22
// Ultima actualizacion :
//
// Description : controlador para manejar el inicio de la app
//
// Author: Jose Carlos Avila Perea
//
// (c) Copyright:
//                    josecarlos.avilaperea@gmail.com

//============================================================+
class Start
{

    protected $views;
    public function __construct()
    {
        $this->views = new Views();
    }

    public function Start()
    {
        $this->views->getView($this, 'start');
    }
}
