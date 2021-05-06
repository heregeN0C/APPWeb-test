<?php
include("conexao_banco.php");

$nome = $_POST['NomePaciente'];
$cpf = $_POST['cpfPaciente'];
$endereco = $_POST['enderecoPaciente'];
$telefone = $_POST['telefonePaciente'];
$botao = $_POST['btnCadastrar'];

if(isset($botao)){
    $sql = mysqli_query($conn, "INSERT INTO paciente(nome, endereco, telefone, cpfPaciente) VALUES('$nome', '$endereco', '$telefone', $cpf);");
    if($sql==true){
        header('Location: ../View/confirmacaoCad.html');
    }else{
        echo "Falha ao cadastrar! Reveja os dados inseridos e tente novamente.";
    }
}

?>