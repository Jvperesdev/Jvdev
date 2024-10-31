<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$conexao = mysqli_connect("localhost","root","","teste");
//CHECAR CONEXAO
if(!$conexao){
    echo"NÃO CONECTADO";
}
echo"CONECTADO";

//RECUPERAR CPF E VERIFICAR
$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string('$conexao','$cpf');
$sql = "SELECT cpf FROM teste.dados WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao, $sql);

if(msqli_num_rows($retorno)>0){
  echo "CPF JA CADASTRADO!<br>";
}else{
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];

    $sql = "INSERT INTO teste.dados(cpf,nome)values($cpf,$nome)";
    $resultado = mysqli_query($conexao,$sql);
    echo"USUARIO CADASTRADO!<BR>";
}


?>
