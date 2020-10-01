<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrado</title>
</head>
<body>
<?php
include("../conexao.php");

$nome=$_POST['tnome'];
$endereco=$_POST['tendereco'];
$celular=$_POST['tcelular'];
$sexo=$_POST['tsexo'];
$email=$_POST['temail'];
$cidade=$_POST['tcidade'];
$salario=$_POST['tsalario'];

//executa o comando SQL no servidor
$sql=mysqli_query($conexao,"insert into funcionario(nome,endereco,celular,sexo,email,cidade,salario)
values('$nome','$endereco','$celular','$sexo','$email','$cidade','$salario')")
or die("Cadastro não Inserido");

//Mensagem se for inserido
echo("Registro Inserido");
header("Location: listar.php");
?>


<a href="listar.php">Listar</a>
</body>
</html>
