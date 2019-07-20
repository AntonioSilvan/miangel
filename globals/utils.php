<?php
    require_once 'models/ClienteModel.php';
    class utils{

        public static function getClientes(){
            $ClienteModel=new ClienteModel();
            return $ClienteModel->getClientes();
        }

        public static  function getCliente($num_cliente){
            $ClienteModel=new ClienteModel();
            return $ClienteModel->getCliente($num_cliente);
        }

        public static function getEmpleados(){
            $EmpleadoModel=new EmpleadoModel();
            return $EmpleadoModel->getEmpleados();
        }

        public static function getEmpleado($num_empleado){
            $EmpleadoModel=new EmpleadoModel();
            return $EmpleadoModel->getEmpleado($num_empleado);
        }
    }
?>
