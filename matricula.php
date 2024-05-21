<?php 

include("conexao.php");

$email= $_POST['email'];
$senha= $_POST['senha'];

$sql= "INSERT INTO matricula(email,senha)
value ('$email','$senha')";

if(mysqli_query($conexao,$sql)){
    echo "usuario cadastrado com sucesso";
}
else{
    echo "erro" . mysqli_connect_error($conexao);
}
  

?>