<?php
    class SiteController{

        public function login(){
            require_once 'views/site/login.php';
        }

        public function error(){
            require_once 'views/site/error.php';
        }

        public function logout(){

        }

        public function dashboard(){
        	require_once 'views/site/dashboard.php';
        }
    }
?>