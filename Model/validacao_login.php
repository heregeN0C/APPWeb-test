<?php
include("conexao_banco.php");

$usuario = $_POST['nomeUsuario'];
$senha = $_POST['senhaUsuario'];
$botao = $_POST['btnLogin'];

if(isset($botao)){
    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE nomeUsuario = $usuario and senhaUsuario = $senha;");
    if(mysqli_num_rows($sql)<=0){
            echo "ERROOOOOOOOOOOOOOOOOOOOOOU";
            die();
    }else{
        header('Location:../View/teste.html');
    }
}

?>