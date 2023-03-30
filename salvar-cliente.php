<?php
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$telefone = $_POST["telefone"] ?? "";
$rua = $_POST["rua"] ?? "";
$numero = $_POST["numero"] ?? "";
$bairro = $_POST["bairro"] ?? "";
$complemento = $_POST["complemento"] ?? "";
$cidade = $_POST["cidade"] ?? "";
$estado = $_POST["estado"] ?? "";
$datadenascimento = $_POST["data-nasc"] ?? "";
$cpf = $_POST["cpf"] ?? "";
$rg = $_POST["rg"] ?? "";
$whatsapp = $_POST["zap"] ?? "";
$fuma = $_POST["fuma"] ?? "";
$bebida = $_POST["bebida"] ?? "";


echo "Nome: $name <br>";
echo "Email: $email <br>";
echo "Telefone: $telefone <br>";
echo "Rua: $rua <br>";
echo "Numero: $numero <br>";
echo "Bairro: $bairro <br>";
echo "Complemento: $complemento <br>";
echo "Cidade: $cidade <br>";
echo "Estado: $estado <br>";
echo "Data de Nascimento: $datadenascimento <br>";
echo "Cpf: $cpf <br>";
echo "Rg: $rg <br>";
echo "Whatsapp: $whatsapp <br>";
echo "Fuma: $fuma <br>";
echo "Bebida: $bebida <br>";
?>
