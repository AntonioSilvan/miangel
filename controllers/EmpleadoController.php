<?php
    require_once 'models/EmpleadoModel.php';
    class EmpleadoController{

        public function viewInsert(){
            require_once 'views/empleado/insert.php';
        }

        public function viewList(){
            require_once 'views/empleado/list.php';
        }

        public function insert(){
            if (!empty($_POST['nombre']) && $_POST['tipo']!="" && !empty($_POST['telefono']) && !empty($_POST['contrasena'])){

                $EmpleadoModel= new EmpleadoModel();
                $EmpleadoModel->setNombre($_POST['nombre']);
                $EmpleadoModel->setTelefono($_POST['telefono']);
                $EmpleadoModel->setTipo($_POST['tipo']);
                $EmpleadoModel->setContrasena($_POST['contrasena']);

                $EmpleadoModel->insert();
                $this->viewList();
            }else{
                $this->viewInsert();
            }
        }

        public function delete(){
            $num_empleado=$_GET['num_empleado'];
            $EmpleadoModel=new EmpleadoModel();
            $EmpleadoModel->setNum_empleado($num_empleado);
            $EmpleadoModel->delete();
            $this->viewList();
        }

        public function edit(){
            if (!empty($_POST['nombre']) && $_POST['tipo']!="" && !empty($_POST['telefono']) && !empty($_POST['contrasena'])){

                $EmpleadoModel= new EmpleadoModel();
                $EmpleadoModel->setNum_empleado($_GET['num_empleado']);
                $EmpleadoModel->setNombre($_POST['nombre']);
                $EmpleadoModel->setTelefono($_POST['telefono']);
                $EmpleadoModel->setTipo($_POST['tipo']);
                $EmpleadoModel->setContrasena($_POST['contrasena']);

                $EmpleadoModel->edit();
                $this->viewList();
            }else{
                $this->viewInsert();
            }
        }
    }

?>