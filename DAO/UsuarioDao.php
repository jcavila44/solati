<?php

class UsuarioDAO
{
    private $db;

    public function __construct()
    {
        $this->db = Connection::getInstance()->connect();
    }

    public function obtenerUsuarios()
    {
        $query = " 
            SELECT 
                *
            FROM 
                USUARIO
            GROUP BY 
                USUARIO.USU_ID 
            ORDER BY 
                USUARIO.USU_ID ASC;
      ";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchall(PDO::FETCH_ASSOC);
    }


    public function consultarUsuarioLogin($usuario)
    {
        $query = " 
            SELECT 
                    *
            FROM 
                    usuario
            WHERE 
                    usuario.usu_correo LIKE '%" . $usuario->getCorreo() . "%'
        ";

        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
