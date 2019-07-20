<?php

    require_once 'models/ClienteModel.php';
    class ClienteController{

        
        public function viewInsert(){
            require_once 'views/cliente/insert.php';
        }
        public function viewList(){
            require_once 'views/cliente/list.php';
        }

        public function insert(){
            if (!empty($_POST['nombre']) && !empty($_POST['direccion']) && !empty($_POST['telefono'])){

                $ClienteModel=new ClienteModel();
                $ClienteModel->setNombre($_POST['nombre']);
                $ClienteModel->setDireccion($_POST['direccion']);
                $ClienteModel->setTelefono($_POST['telefono']);

                $ClienteModel->insert();
                $this->viewList();
            }else{
                $this->viewInsert();
            }

        }

        public function delete(){
            $num_cliente=$_GET['num_cliente'];
            $ClienteModel=new ClienteModel();
            $ClienteModel->setNum_cliente($num_cliente);
            $ClienteModel->delete();
            $this->viewList();
        }

        public function viewEdit(){
            $this->viewInsert();
        }

        public function edit(){
            if (!empty($_POST['nombre']) && !empty($_POST['direccion']) && !empty($_POST['telefono'])){

                $ClienteModel=new ClienteModel();
                $ClienteModel->setNum_cliente($_GET['num_cliente']);
                $ClienteModel->setNombre($_POST['nombre']);
                $ClienteModel->setDireccion($_POST['direccion']);
                $ClienteModel->setTelefono($_POST['telefono']);

                $ClienteModel->edit();
                $this->viewList();
            }else{
                $this->viewInsert();
            }
        }
    }
?>