<?php
    require_once 'autoload.php';
    require_once 'globals/parameters.php';
    //require_once 'globals/db.php';
    require_once 'views/site/head.php';

    function msg_Error(){
        $error=new SistemaController();
        $error->error();
    }

    //VALIDANDO CONTROLADOR
    if(isset($_GET['controller'])){
        $nombre_controlador=$_GET['controller'].'Controller';
    }else if(!isset($_GET['controller']) && !isset($_GET['action'])){
        $nombre_controlador=controller_default;
    }else{
        msg_error();
        exit();
    }

    if(class_exists($nombre_controlador)){
        $controlador=new $nombre_controlador();

        if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
            $action=$_GET['action'];
            $controlador->$action();
        }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
            $action_default=action_default;
            $controlador->$action_default();
        }else{
            msg_error();
        }
    }else{
        msg_error();
    }

?>

 <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?=base_url?>assets/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?=base_url?>assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?=base_url?>assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?=base_url?>assets/js/mdb.min.js"></script>
  
  <!-- Ajax del dashboard -->
  <script src="<?=base_url?>js/dashboard.js"></script>

  <!-- Plugin vanilla toast -->
  <script src="<?=base_url?>assets/plugins/vanillatoast/vanillatoasts.js"></script>