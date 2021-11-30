<?php
require_once "modelos/usuario_MO.php";

class usuario_CO
{
    function __construct(){}

    function agregarUsuario()
    {
        $conexion=new conexion('A');
        $usuario_MO=new sexos_MO($conexion);

        $usuario_nombre=$_POST['usuario_nombre'];

        $usuario_MO->agregarUsuario($usuario_nombre);

        echo "EXITO";
    }
}
?>