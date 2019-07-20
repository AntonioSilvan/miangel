<?php
    $empleados=utils::getEmpleados();
    require_once 'views/site/dashboard.php';
?>
<div class="row p-4">
    <div class="col-12">
        <a href="<?=base_url?>empleado/viewInsert" class="cbg-accent btn-radius btn ctext-blanco"><i class="fas fa-user-plus"></i> Agregar nuevo empleado</a>
        <table class="table table-sm">
            <thead class="cbg-primary ctext-blanco">
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Tipo</th>
                <th>Accion</th>
            </tr>
            </thead>
            <?php while($value=$empleados->fetch_object()){ ?>
                <tr>
                    <td><?=$value->nombre?></td>
                    <td><?=$value->telefono?></td>
                    <td><?=$value->tipo?></td>
                    <td>
                        <a href="<?=base_url?>empleado/viewInsert&num_empleado=<?=$value->num_empleado?>" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger btn_delete" id="<?=$value->num_empleado?>"><i class="fas fa-user-times"></i></a>
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
            window.location.href="<?=base_url?>empleado/delete&num_empleado="+id;
        }
    });
</script>
<?php require_once 'views/site/footer.php'; ?>
