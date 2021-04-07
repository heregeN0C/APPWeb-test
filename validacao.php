<?php
$user = $_POST['user'];
$password = $_POST['pass'];
$entrar = $_POST['btnEnviar'];
$host="localhost";
$db_user="admin";
$db_pass="87600979";

$connect = mysqli_connect($host, $db_user, $db_pass);
$db = mysqli_select_db($connect,'consultorio');
if(isset($entrar)){

    $verifica = mysqli_query($connect, "select * from usuarios where nome_usuario = '$user' and senha_usuario = '$password'") or die("erro ao selecionar");
    if(mysqli_num_rows($verifica)<=0){
        echo "script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
    }else{
        setcookie("login",$user);
        header("Location:teste.html");
    }
    
}

?>