<?php
//Zona horaria de la región
date_default_timezone_set('America/Bogota');

//Nombre del proyecto
const PROJECT_NAME = "SOLATI APP";

//Ruta del proyecto
const BASE_URL = "http://localhost/solati/";


//Datos de conexion Base de datos
const DB_HOST = "localhost";
const DB_USER = "postgres";
const DB_PASSWORD = "root";
const DB_NAME = "solatibd";
const DB_CHARSET = "";
const DB_DRIVER = "pgsql";

const MAIL_HOST       = 'smtp.office365.com';
const MAIL_SMTPAUTH   = true;
const MAIL_NAME_USER  = 'Uniajc-Maps';
const MAIL_EMAIL      = '';
const MAIL_PASSWORD   = '';
const MAIL_SMTPSECURE = 'tls';
const MAIL_PORT       = 587;

const ROUTES =
[
  'app' => array(
    'Home' => BASE_URL . 'home',
    'Start' => BASE_URL . 'start',
    'Login' => BASE_URL . 'login',
    'Logout' => BASE_URL . 'login/logout',
    'GestorUsuario' => BASE_URL . 'gestorusuarios',
    'NotFound' => BASE_URL . 'notfound',
  )
];
