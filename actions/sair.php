<?php 

session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);

// Redireciona para o arquivo login e exiba uma mensagem:
header("Location: ../index.php");

?>