<?php
    include_once('conecta.php');

    if(!empty($_POST['id']))
    {
        $id = $_POST['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $nomusu = $user_data['nomusu'];
                
            }
        }
        else
        {
            header('Location: formulario.php');
        }
    }
    else
    {
        header('Location: formulario.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario de Edição </title>
   
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />

</head>
<body>
    <div class="box">
        <form action="edicao.php" method=POST>
            <fieldset>

    <a href="admin.php">Voltar</a>
    <div class="box">
        <form action="atualiza.php" method="POST">
            <fieldset>
                <legend><b> Editar Usuário </b></legend>
                <br>
                <div class="inputBox1">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox1">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox1">
                    <input type="text" name="nomusu" id="nomusu" class="inputUser" value=<?php echo $nomusu;?> required>
                    <label for="nomusu" class="labelInput">Nome de Usuário</label>
                </div>
                <br><br>
                
            </fieldset>
        </form>
    </div>
</body>
</html>
