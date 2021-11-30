<?php
class usuario_VI
{
    function __construct(){}

    function agregarUsuario()
    {
        require_once "modelos/usuarios_MO.php";
        $conexion=new conexion('S');

        $usuarios_MO=new usuario_MO($conexion);
        $arreglo=$usuario_MO->seleccionar();
        ?>
        <div class="card">
        <div class="card-header">
            Agregar usuarios
        </div>
        <div class="card-body">
            <form id="agregar usuarios">
            <div class="form-group">
                <label for="usuarios_nombre">Nombre del usuarios</label>
                <input type="text" class="form-control" id="sexo_nombre" name="sexo_nombre">
        </div>
        <button type="button" onclick="agregarUsuarios();" class="btn btn-primary float-right">Agregar</button>
        </form>
    </div>
    </div>

    <div class="card">
    <div class="card-header">
        Listar
    </div>
    <div class="card-body">
        <table class="table table-sm table-bordered table-hover">
        <thead>
            <tr>
            <th style="text-align:center;">#</th>
            <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($arreglo)
        {
            $i=1;
            foreach($arreglo as $objeto)
            {
                $usuario_id=$objeto->usuario_id;
                $usuario_nombre=$objeto->usuario_nombre;
                ?>
                <tr>
                <td style="text-align:center;"><?php echo $i;?></td>
                <td><?php echo $usuario_nombre;?></td>
                </tr>
                <?php
                $i++;
            }
        }
        ?>
        </tbody>
        </table>
    </div>
    </div>
    <script>
    function agregarUsuario()
    {
        var cadena=$('#agregar_usuarios').serialize();

        $.post('usuarios_CO/agregarUsuario',cadena,function(respuesta){
            if(respuesta=='EXITO')
            {
                alert(respuesta);
            }
            else
            {
                alert(respuesta);
            }
        });
    }
    </script>
    <?php
    }
}
?>