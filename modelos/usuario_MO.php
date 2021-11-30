<?php
class usuario_MO
{
    private $conexion;

    function __construct($conexion)
    {
        $this->conexion=$conexion;
    }

    function agregarusuario($usuario_nombre)
    {
        $sql="insert into usuario (usuario_nombre) values ('usuario_nombre')";
        $this->conexion->realizarConsulta($sql);
    }

    function seleccionar()
    {
        $sql="select * from sexos";

        $this->conexion->realizarConsulta($sql);

        $arreglo=$this->conexion->extraerRegistros();

        return $arreglo;
    }
}
?>