<?php 

    class DefaultController{
        public function error(){
            return "kết nối thất bại";
        }
    }

    $new= new DefaultController();