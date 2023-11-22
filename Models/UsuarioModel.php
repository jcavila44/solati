<?php

class UsuarioModel
{

    private string $strUsuCorreo;
    private string $strUsuCedula;
    private string $strUsuNombre;
    private string $strUsuPassword;

    
    public function setCorreo($paramCorreo)
    {
        $this->strUsuCorreo = $paramCorreo;
    }

    public function setCedula($paramCedula)
    {
        $this->strUsuCorreo = $paramCedula;
    }

    public function setNombre($paramNombre)
    {
        $this->strUsuCorreo = $paramNombre;
    }

    public function setPassword($paramPassword)
    {
        $this->strUsuCorreo = $paramPassword;
    }

    public function getCorreo()
    {
        return $this->strUsuCorreo;
    }

    public function getCedula()
    {
        return $this->strUsuCedula;
    }

    public function getNombre()
    {
        return $this->strUsuNombre;
    }

    public function getPassword()
    {
        return $this->strUsuPassword;
    }
}
