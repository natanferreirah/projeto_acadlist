<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="adminpage.css">
    <link rel="shortcut icon" href="logoicone.ico" type="image/x-icon">
</head>
<body>

    <main id="container">
        <form action="create.php" method="post">
            <div class="titulo_box">
                <h1 class="titulo">
                    Cadastro de Escolas
                </h1>
            </div>
            <div class="input_rotulo">
                <label for="usuario" class="rotulo">Usuário:</label>
            </div>
            <div class="input_box">
                <input type="text" name="usuario" class="input_style" placeholder="renanzinho_meuamor...">
            </div>
            <div class="input_rotulo">
                <label for="nome" class="rotulo">Nome:</label>
            </div>
            <div class="input_box">
                <input type="text" name="nome" class="input_style" placeholder="Eduardo Moreira de Ciclano Beltrano...">
            </div>
            <div class="input_rotulo">
                <label for="senha" class="rotulo">Senha:</label>
            </div>
            <div class="input_box">
                <input type="password" name="senha" class="input_style" placeholder="melhorprofessor...">
            </div>
            <div class="input_rotulo">
                <label for="senha" class="rotulo"> Eu sou:</label>
            </div>
            <div class="input_select">
                <select name="niveis" class="select">
                    <option value="Admin">Admin</option>
                    <option value="Escola">Escola</option>
                    <option value="Professor">Professor</option>
                </select>
            </div>
            <div class="cadastro">
                <p>Já tem um cadastro? <a href="login.html" class="link_login"><strong>Faça login aqui</strong></a></p>
            </div>
            <div class="input_enviar">
                <input type="submit" value="Cadastrar" class="botao_cadastrar">
            </div>
        </form>
    </main>
</body>

</html>