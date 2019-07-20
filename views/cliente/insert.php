<?php
    require_once 'views/site/dashboard.php';
?>
<div class="row mt-4">
    <div class="col-7">

        <?php if(!isset($_GET['num_cliente'])){ ?>
        <form class="text-center border p-4" method="post" action="<?=base_url?>cliente/insert">
            <p class="h4 mb-4">Agregar</p>

            <input type="text" class="form-control mb-2" placeholder="Nombre..." name="nombre">
            <input type="text" class="form-control mb-2" placeholder="Telefono..." name="telefono">
            <input type="text" class="form-control mb-2" placeholder="Direccion..." name="direccion">

            <button class="btn btn-radius cbg-accent ctext-blanco" id="btn" type="submit">Registrar</button>

        </form>

        <?php }else{ $cliente=utils::getCliente($_GET['num_cliente'])->fetch_object();
            if(!is_object($cliente)){header("location:".base_url."cliente/viewInsert");}?>
            <form class="text-center border p-4" method="post" action="<?=base_url?>cliente/edit&num_cliente=<?=$cliente->num_cliente?>">
                <p class="h4 mb-4">Editar</p>

                <input type="text" class="form-control mb-2" placeholder="Nombre..." name="nombre" value="<?=$cliente->nombre?>">
                <input type="text" class="form-control mb-2" placeholder="Telefono..." name="telefono" value="<?=$cliente->telefono?>">
                <input type="text" class="form-control mb-2" placeholder="Direccion..." name="direccion" value="<?=$cliente->direccion?>">

                <button class="btn btn-radius cbg-accent ctext-blanco" id="btn" type="submit">Editar</button>

            </form>
        <?php } ?>
    </div>
</div>

<?php require_once 'views/site/footer.php'; ?>
