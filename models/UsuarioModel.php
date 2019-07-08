<?php
    class UsuarioModel{
        private $db;
        private $alu_id;
        private $alu_nombre;
        private $alu_carrera;
        private $alu_semestre;

        public function __construct()
        {
            $this->db=Database::connect();
        }

        public function setAlu_id($var){
            $this->alu_id=$var;
        }
        public function setAlu_nombre($var){
            $this->alu_nombre=$var;
        }
        public function setAlu_carrera($var){
            $this->alu_carrera=$var;
        }
        public function setAlu_semestre($var){
            $this->alu_semestre=$var;
        }

        public function getAlu_id(){
            return $this->alu_id;
        }
        public function getAlu_nombre(){
            return $this->alu_nombre;
        }
        public function getAlu_carrera(){
            return $this->alu_carrera;
        }
        public function getAlu_semestre(){
            return $this->alu_semestre;
        }

        public function insert(){
            $alu_nombre=$this->getAlu_nombre();
            $alu_carrera=$this->getAlu_carrera();
            $alu_semestre=$this->getAlu_semestre();

            $query="INSERT INTO alumnos VALUES (null, '$alu_nombre', '$alu_carrera', $alu_semestre)";
            $result=$this->db->query($query);
            return $result;
        }
    }
?>