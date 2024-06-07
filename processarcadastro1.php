<?php 
include "conexao.php";


$nome= $_POST['nome'];
$email= $_POST['email'];
$senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);




$sql = "INSERT INTO cadastroaluno (nome,email,senha)
VALUES('$nome','$email','$senha')";
if($sql = mysqli_query($conexao,$sql)){

    echo("cadastrado com sucesso!");
     
   ;
}




?>