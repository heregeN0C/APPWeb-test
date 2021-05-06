<?php
include("conexao_banco.php");

$consulta = "SELECT * FROM paciente";

$resultado_consulta = mysqli_query($conn, $consulta);

if(($resultado_consulta) and ($resultado_consulta -> num_rows!=0)){
    while($row_paciente = mysqli_fetch_assoc($resultado_consulta)){
        echo $row_paciente['nome'] . "<br>";
    }
}else{
    echo "nenhum usuário encontrado.";
}

?>