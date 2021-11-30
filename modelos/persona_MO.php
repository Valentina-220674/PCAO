<?php
class persona_MO
{
    private $conexion;

    function __construct($conexion)
    {
        $this->conexion=$conexion;
    }

    function seleccionar($pers_id)
    {
        $sql="select pers_nombre from persona where pers_id='$pers_id'";

        $this->conexion->realizarConsulta($sql);

        $arreglo=$this->conexion->extraerRegistros($sql);
        
        return $arreglo;
    } 
}
?>