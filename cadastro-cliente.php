<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="salvar-cliente.php" method="post">
        
    <h1>Cadastro de Clientes</h1>
        Nome: <input name="name" type="text"><br>
        Email: <input name="email" type="email"><br>
        Telefone: <input name="telefone" type="tel"><br>
        Rua: <input name="rua" type="text"><br>
        Numero: <input name="numero" type="number"><br>
        Bairro: <input name="bairro" type="text"><br>
        Complemento: <input name="complemento" type="text"><br>
        Cidade: <input name="cidade" type="text"><br>
        <select name="estado">
            <option selected>Estado</option>
            <option value="ac">AC</option>
            <option value="ac">AL</option>
            <option value="ac">AP</option>
            <option value="ac">AM</option>
            <option value="ac">BA</option>
            <option value="ac">CE</option>
            <option value="ac">ES</option>
            <option value="ac">GO</option>
            <option value="ac">MA</option>
            <option value="ac">MT</option>
            <option value="ac">MS</option>
            <option value="ac">MG</option>
            <option value="ac">PA</option>
            <option value="ac">PB</option>
            <option value="ac">PR</option>
            <option value="ac">PE</option>
            <option value="ac">PI</option>
            <option value="ac">RJ</option>
            <option value="ac">RN</option>
            <option value="ac">RS</option>
            <option value="ac">RO</option>
            <option value="ac">RR</option>
            <option value="ac">SC</option>
            <option value="ac">SP</option>
            <option value="ac">SE</option>
            <option value="ac">TO</option>
        </select>
        Data de nascimento: <input name="data-nasc" type="date"><br>
        CPF: <input name="cpf" type="text"><br>
        RG: <input name="rg" type="text"><br>
        Whatsapp: <input name="zap" type="tel"><br>
        Fumante:
        <input type="radio" name="fuma" value="sim">Sim
        <input type="radio" name="fuma" value="não">Não <br>
        Bebe(Álcool):
        <input type="radio" name="bebida" value="sim">Sim
        <input type="radio" name="bebida" value="não">Não <br>
        <button type="submit">Enviar</button>

        
    </form>
    
</body>
</html>