<?php
include("conexao_banco.php");

$consulta = "SELECT * FROM paciente";

$resultado_consulta = mysqli_query($conn, $consulta);

if(($resultado_consulta) and ($resultado_consulta -> num_rows!=0)){
    while($row_paciente = mysqli_fetch_assoc($resultado_consulta)){
        $result = "cpf: ". $row_paciente['cpfPaciente']. " -- nome: ". $row_paciente['nome']. "-- Endereço: ". $row_paciente['endereco']. "-- Telefone/Celular: ". $row_paciente['telefone']. "<br>";
        echo $result;
    }
}else{
    echo "nenhum usuário encontrado.";
}
mysqli_close($conn);

?>