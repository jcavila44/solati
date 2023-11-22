<?php
//============================================================+
// Carpeta: Controllers
// Nombre del archivo   : error.php
// Inicio       : 2023-11-22       : 2021-09-11
// Ultima actualizacion :
//
// Description : controlador para manejar los errores de la app
//
// Author: Jose Carlos Avila Perea
//
// (c) Copyright:
//                    josecarlos.avilaperea@gmail.com

//============================================================+
class Errors
{
    protected $views;
    public function __construct()
    {
        $this->views = new Views();
    }

    public function notFound()
    {
        $this->views->getView($this, "error");
    }
}
$notFound = new Errors();
$notFound->notFound();
