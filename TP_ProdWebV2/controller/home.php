<?php

class home {
     /* Checkeo si campos completos 
        Checkeo si campos tienens sentido
        Checkeo si existe sesión*/

        /* Ejecuto lógica de modelo de negocio
        Llamar a funciones del archivo modelo/ejemplo.php
        Por ejemplo la funcion comprar() si existiese*/

        /* Lo anterior tiene dos salidas,
        o todo bien -> muestro pantalla X al usuario
        o algo salio mal -> muestro pantalla Y al usuario
        */

    function inicio(){

        require_once("views/home.php");

    }

    function contact(){
        require_once("views/contact.php");
    }

    function login(){
        require_once("views/login.php");
    }

}

?>