<?php


    class EmpleadoModel
    {
        private $db;
        private $num_empleado;
        private $nombre;
        private $tipo;
        private $telefono;
        private $contrasena;

        public function __construct()
        {
            $this->db=Database::connect();
        }

        public function setNum_empleado($var){
            $this->num_empleado=$var;
        }
        public function setNombre($var){
            $this->nombre=$var;
        }
        public function setTipo($var){
            $this->tipo=$var;
        }
        public function setTelefono($var){
            $this->telefono=$var;
        }
        public function setContrasena($var){
            $this->contrasena=$var;
        }

        public function getNum_empleado(){
            return $this->num_empleado;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function getContrasena(){
            return $this->contrasena;
        }

        public function insert(){

            $query="INSERT INTO empleados VALUES (null,'{$this->getNombre()}','{$this->getTelefono()}' ,{$this->getTipo()} , '{$this->getContrasena()}')";
            $this->db->query($query);
        }

        public function getEmpleados(){
            $query="SELECT * FROM empleados";
            $result=$this->db->query($query);
            return $result;
        }
        public function getEmpleado($num_empleado){
            $query="SELECT * FROM empleados WHERE num_empleado=$num_empleado";
            $result=$this->db->query($query);
            return $result;
        }

        public function delete(){
            $num_empleado=$this->getNum_empleado();
            $query="DELETE FROM empleados WHERE num_empleado=$num_empleado";
            $this->db->query($query);
        }

        public function edit(){
            $query="UPDATE empleados SET nombre='{$this->getNombre()}', telefono='{$this->getTelefono()}', tipo={$this->getTipo()},contrasena='{$this->getContrasena()}' WHERE num_empleado={$this->getNum_empleado()}";
            $this->db->query($query);
        }
    }
?>