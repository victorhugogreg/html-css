<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];

    $result = mysqli_query($conn, "INSERT INTO cadastro(nome,email,senha,telefone,sexo,nascimento ) VALUES ('$nome','$email','$senha','$telefone','$genero','$nascimento')");
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imagens/style-cad.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="cad.php" method="post">
            <fieldset>
                <legend><strong>Novo Cadastro</strong></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="inputLabel">Nome Completo</label>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="inputLabel">E-mail</label>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="inputLabel">Nova Senha</label>
                </div>
                <br> <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="inputLabel">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBoxDate">
                    <label for="nascimento"><strong>Data de nascimento:</strong></label>
                    <input type="date" name="nascimento" id="nascimento" required>                    
                </div>
                <br> <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>