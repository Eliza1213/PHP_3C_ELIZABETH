<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
       
        $usuario=$_POST['name'];
        $contraseña =$_POST['pass'];
        $edad =$_POST['edad'];

        if(empty($usuario) || empty($contraseña) || empty($edad)){
            echo "Existen campos no válidos";
        }
        elseif(!is_numeric($edad) || $edad < 18){
            echo "Edad insuficiente";
        }
        elseif($usuario !=="luis" || $contraseña !=="mendoza"){
            echo "Datos incorrectos";
        }
        else{
            echo "Bienvenido <br> " . $usuario;
        }
    }
?>


    

  