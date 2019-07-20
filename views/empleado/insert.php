<?php
require_once 'views/site/dashboard.php';
?>
<div class="row mt-4">
    <div class="col-7">

        <?php if(!isset($_GET['num_empleado'])){ ?>
            <form class="text-center border p-4" method="post" action="<?=base_url?>empleado/insert">
                <p class="h4 mb-4">Agregar</p>

                <input type="text" class="form-control mb-2" placeholder="Nombre..." name="nombre">
                <input type="text" class="form-control mb-2" placeholder="Telefono..." name="telefono">
                <select name="tipo" id="" class="custom-select mb-2">
                    <option selected="true" value="">Seleccione el tipo</option>
                    <option value="0">Empleado</option>
                    <option value="1">Administrador</option>
                </select>
                <input type="text" class="form-control mb-2" placeholder="Contraseña..." name="contrasena">

                <button class="btn btn-radius cbg-accent ctext-blanco" id="btn" type="submit">Registrar</button>

            </form>

        <?php }else{ $empleado=utils::getEmpleado($_GET['num_empleado'])->fetch_object();
            if(!is_object($empleado)){header("location:".base_url."empleado/viewInsert");}?>
            <form class="text-center border p-4" method="post" action="<?=base_url?>empleado/edit&num_empleado=<?=$empleado->num_empleado?>">
                <p class="h4 mb-4">Editar</p>

                <input type="text" class="form-control mb-2" placeholder="Nombre..." name="nombre" value="<?=$empleado->nombre?>">
                <input type="text" class="form-control mb-2" placeholder="Telefono..." name="telefono" value="<?=$empleado->telefono?>">
                <select name="tipo" id="" class="custom-select mb-2">
                    <?php if ($empleado->tipo==0){?>
                        <option selected="true" value="0">Empleado</option>
                        <option value="1">Administrador</option>
                    <?php }else{?>
                        <option value="0">Empleado</option>
                        <option selected="true" value="1">Administrador</option>
                    <?php } ?>
                </select>
                <input type="text" class="form-control mb-2" placeholder="Contraseña..." name="contrasena" value="<?=$empleado->contrasena?>">

                <button class="btn btn-radius cbg-accent ctext-blanco" id="btn" type="submit">Editar</button>

            </form>
        <?php } ?>
    </div>
</div>

<?php require_once 'views/site/footer.php'; ?>
