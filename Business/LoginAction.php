<?php

include './LoginBusiness.php'; 


if (isset($_POST['login'])) {
    if (isset($_POST['cedula']) && isset($_POST['password'])) {
        $cedula = $_POST['cedula'];
        $password = $_POST['password'];
        if (strlen($cedula) > 0 && strlen($password) > 0) {
            $resultado = 0;
            if($cedula == "administrador" && $password = "1234"){
            $resultado = 1;    
            }
                    if ($resultado == 1) {
                        header("location: ../view/viewAdministrador/PaginaPrincipal.php");
                    } else {
                        header("location: ../view/viewAdministrador/Login.php?error=dbError");
                    }
        } else {
            header("location: ../view/ClienteView.php?error=emptyField");
        }
        
    } else {
        header("location: ../view/ClienteView.php?error=error");
    }
}