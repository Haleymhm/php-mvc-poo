<?php
    if(strtolower($_SERVER['REQUEST_METHOD']) != 'post'){
        estado_servidor('Error! Metodo de ingreso invalido!');
    }
    $db = new Conexion();

    $email = $db->real_escape_string($_POST['user']); 
    $pass = strip_tags($_POST['pass']);
 

    $b_user = "SELECT * FROM tabla WHERE email_user='$email'";
    $result = $db->query($b_user);
    $ses = $result->fetch_array();
    $salt = substr ($email, 0, 2);
    $clave_crypt = md5($pass);

    if(($email != '') && ($pass != '')){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($result->num_rows > 0){
                if($ses['pass_user'] == $clave_crypt){
                    $_SESSION['sesion_id'] = $ses['id_user'];
                    //ini_set('session.cookie_lifetime', time() + (60*60*24)); 
                    /*if($_POST['sesion']) { 
                        ini_set('session.cookie_lifetime', time() + (60*60*24)); 
                    }*/
                    $message = 1;
                }else{
                    $message ='<div class="alert alert-form alert-warning text-xs-center">Verifique contraseña.</div>';
                }
            }else{
                $message ='<div class="alert alert-form alert-danger text-xs-center">Email no existe en nuestro sistema.</div>';
            }
        }else{
            $message = '<div class="alert alert-form alert-danger text-xs-center">Email inválido.</div>';
        }
    }else{
        $message = '<div class="alert alert-form alert-danger text-xs-center">Deberas llenar todos los campos.</div>';
    }

    echo $message;

    function estado_servidor($str){
        echo json_encode(array('estado'=>$str));
        exit;
    }
?>