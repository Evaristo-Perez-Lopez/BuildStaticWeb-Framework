<?php

    abstract class AppController
    {
        abstract public function index();

        public function __construct(){
        }
        protected function set($nombre=null,$valor=array())
        {
            setcookie($nombre,$valor,time()+30);
        }
        protected function redirect($url=array()){
            $path="";
            if($url["controller"]){
                $path.=$url["controller"];
            }
            if ($url["action"]) {
                $path.="/".$url["action"];
            }

            header("LOCATION: ".APP_URL."/".$path);
        }
    }
    ?>