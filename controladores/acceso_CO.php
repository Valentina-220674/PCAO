<?php
require_once "modelos/accesos_MO.php";

class acceso_CO
{
    function __construct(){}

    function iniciarSesion($acce_usuario,$acce_clave)
    {
        $conexion=new conexion('S');

        $acceso_MO = new acceso_MO($conexion);

        $arreglo = $acceso_MO->iniciarSesion($acce_usuario,$acce_clave);

        if($arreglo)
        {
            $pers_id=$arreglo[0]->pers_id;
            $_SESSION['pers_id']=$pers_id;
        }
        header('Location: index.php');
    }
    
    function cerrarSesion()
    {
        session_destroy();
    }
}
?>