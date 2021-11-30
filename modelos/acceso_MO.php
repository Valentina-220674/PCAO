<?php
class acceso_MO
{
    private $conexion;

    function __construct($conexion)
    { 
        $this->conexion=$conexion;
    }

    function iniciarSesion($acce_usuario,$acce_clave)
    {
        $sql="select * from acceso where acce_usuario='$acce_usuario' and acce_clave='$acce_clave'";

        $this->conexion->realizarConsulta($sql);

        $arreglo=$this->conexion->extraerRegistros($sql);

        return $arreglo;
    } 
}
?>