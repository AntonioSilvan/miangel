<?php

    require_once 'models/UsuarioModel.php';
    class UsuarioController{

        
        public function viewInsert(){
            require_once 'views/users/insert.php';
        }

        public function texto(){
            echo "<script type='text/javascript'>console.log('eja')</script>";
        }
        public function insert(){
                $alu_nombre=$_POST['nombre'];
                $alu_semestre=$_POST['semestre'];
                $alu_carrera=$_POST['carrera'];

                $UsuarioModel=new UsuarioModel();
                $UsuarioModel->setAlu_nombre($alu_nombre);
                $UsuarioModel->setAlu_carrera($alu_carrera);
                $UsuarioModel->setAlu_semestre($alu_semestre);

                $UsuarioModel->insert();
                

        }
    }
?>