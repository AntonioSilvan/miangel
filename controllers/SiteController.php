<?php
    class SiteController{

        public function login(){
            require_once 'views/site/login.php';
        }

        public function error(){
            require_once 'views/site/error.php';
        }
    }
?>