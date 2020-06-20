<?php
      $_SESSION['sesion_id'] == NULL ;
      unset($_SESSION['sesion_id']);
      session_destroy(); 
      header('HTTP/1.0 401 Unauthorized');
      header("Location: http://localhost/prueba/visualchilelta/");
      exit;
     
?>