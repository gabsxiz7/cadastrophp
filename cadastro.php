<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <aside>
            <img src="images/19245710_6101095.svg" alt="">
        </aside>

        <form action="php/insert_user.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario">

            <label for="senha">Senha</label>
            <input type="text" name="senha" id="senha">

            <label for="setor">Setor</label>
            <input type="text" name="setor" id="setor">


        <div class="botao">
            <button type="submit">Enviar Dados</button>
            <a href="index.html">Voltar</a>
        </div>

        </form>
        

    </div>
    
</body>
</html>