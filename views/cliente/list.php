<?php
    $clientes=utils::getClientes();
    require_once 'views/site/dashboard.php';
?>
<div class="row p-4">
    <div class="col-12">
        <a href="<?=base_url?>cliente/viewInsert" class="cbg-accent btn-radius btn ctext-blanco"><i class="fas fa-user-plus"></i> Agregar nuevo cliente</a>
        <table class="table table-sm">
            <thead class="cbg-primary ctext-blanco">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Puntos</th>
                <th>Accion</th>
            </tr>
            </thead>
            <?php while($value=$clientes->fetch_object()){ ?>
                <tr>
                    <td><?=$value->nombre?></td>
                    <td><?=$value->direccion?></td>
                    <td><?=$value->telefono?></td>
                    <td><?=$value->puntos?></td>
                    <td>
                        <a href="<?=base_url?>cliente/viewEdit&num_cliente=<?=$value->num_cliente?>" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger btn_delete" id="<?=$value->num_cliente?>"><i class="fas fa-user-times"></i></a>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</div>


<script type="text/javascript" src="<?=base_url?>assets/js/jquery-3.4.1.min.js"></script>
<script>
    $(".btn_delete").click(function(){
        var id=$(this).attr('id');
        var option=confirm("Desea eliminar a este cliente?");
        if (option){
            window.location.href="<?=base_url?>cliente/delete&num_cliente="+id;
        }
    });
</script>
<?php require_once 'views/site/footer.php'; ?>