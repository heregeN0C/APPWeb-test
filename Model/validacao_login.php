<?php
include("conexao_banco.php");

$usuario = $_POST['floatingInput'];
$senha = $_POST['floatingPassword'];
$botao = $_POST['btnLogin'];

if(isset($botao)){
    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE nomeUsuario = '$usuario' AND senhaUsuario = '$senha';");
    if(mysqli_num_rows($sql)==1){
        echo "Logado com sucesso!";
        header('Location: ../View/pagInicial.html');
    }else{
        header('Location: ../View/erroLogin.html');
    }
}

?>