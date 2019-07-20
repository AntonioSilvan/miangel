<?php
    class ClienteModel{
        private $db;
        private $num_cliente;
        private $nombre;
        private $direccion;
        private $telefono;
        private $puntos;

        public function __construct()
        {
            $this->db=Database::connect();
        }

        public function setNum_cliente($var){
            $this->num_cliente=$var;
        }
        public function setNombre($var){
            $this->nombre=$var;
        }
        public function setDireccion($var){
            $this->direccion=$var;
        }
        public function setTelefono($var){
            $this->telefono=$var;
        }
        public function setPuntos($var){
            $this->puntos=$var;
        }

        public function getNum_cliente(){
            return $this->num_cliente;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getDireccion(){
            return $this->direccion;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function getPuntos(){
            return $this->puntos;
        }

        public function insert(){

            $query="INSERT INTO clientes VALUES ('{$this->getNombre()}','{$this->getDireccion()}' ,'{$this->getTelefono()}' , 0, null)";
            $this->db->query($query);
        }

        public function getClientes(){
            $query="SELECT * FROM clientes";
            $result=$this->db->query($query);
            return $result;
        }
        public function getCliente($num_cliente){
            $query="SELECT * FROM clientes WHERE num_cliente=$num_cliente";
            $result=$this->db->query($query);
            return $result;
        }

        public function delete(){
            $num_cliente=$this->getNum_cliente();
            $query="DELETE FROM clientes WHERE num_cliente=$num_cliente";
            $this->db->query($query);
        }

        public function edit(){

            $query="UPDATE clientes SET nombre='{$this->getNombre()}', telefono='{$this->getTelefono()}', direccion='{$this->getDireccion()}' WHERE num_cliente={$this->getNum_cliente()}";
            $this->db->query($query);
        }
    }
?>