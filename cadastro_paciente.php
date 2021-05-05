<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar Paciente</title>
        <link rel="stylesheet" href="bootstrap-4.1.3-dist\css\bootstrap.css">
        <link rel="stylesheet" href="estilo-login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="tituloCad">
            <h1>Cadastro de novo paciente</h1>
        </div>
        <div class="telaCadastro">
            <form method="POST" action="">
                <p class="nome_novo_paciente">Nome: </p>
                <p class="cpf_novo_paciente">CPF: </p>
                <p class="endereco_novo_paciente">Endereço: </p>
                <p class="telefone_novo_paciente">Telefone/Celular: </p>

                <input type="text" name="nome_novo_paciente" placeholder="Insira o nome">
                <input type="text" name="cpf_novo_paciente" placeholder="insira o CPF">
                <input type="text" name="endereco_novo_paciente" placeholder="Endereço do Paciente">
                <input type="text" name="telefone_novo_paciente" placeholder="Telefone para Contato">
                <input type="submit" name="btnCadastrar" value="Cadastrar">
            </form>
        </div>
        <script scr="bootstrap-4.1.3-dist\js\bootstrap.bundle.js"></script>
        <script scr="bootstrap-4.1.3-dist\js\bootstrap.js"></script>
        <script src="bootstrap-4.1.3-dist\js\bootstrap.bundle.min.js"></script>
        <script src="bootstrap-4.1.3-dist\js\bootstrap.min.js"></script>
    </body>
</html>

<?php
$host="localhost";
$db_user="admin";
$db_pass="87600979";

$connect = mysqli_connect($host, $db_user, $db_pass);
$db = mysqli_select_db($connect,'consultorio');

$nomePaciente = $_POST['nome_novo_paciente'];
$cpfPaciente = $_POST['cpf_novo_paciente'];
$enderecoPaciente = $_POST['endereco_novo_paciente'];
$telefonePaciente = $_POST['telefone_novo_paciente'];
$btnCadastrar = $_POST['btnCadastrar'];

if(isset($btnCadastrar)){
    $sql = mysqli_query($connect, "INSERT INTO paciente(cpfPaciente, nomePaciente, enderecoPaciente, telefonePaciente) values($cpfPaciente, $nomePaciente, $enderecoPaciente, $telefonePaciente);");
}
if(mysqli_num_rows($sql)<=0){
    echo "script language='javascript' type='text/javascript'>
        alert('Erro ao cadastrar!!!');window.location
        .href='login.html';</script>";
    die();
}else{
    echo "script language='javascript' type='text/javascript'>
    alert('Cadastrado com Sucesso!!!');window.location
    .href='login.html';</script>";
    header("Location:pagInicial.html");
}

?>