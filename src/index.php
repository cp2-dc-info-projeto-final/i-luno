<head>
  <meta charset="UTF-8" />
  <title>I-luno</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="login.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nomUsuario"> Seu Nome de usuário </label>
            <input name="cadastro" required="required" type="text" placeholder="Digite seu nome de usuário" /> 
           
          <p> 
            <label for="nomUsuario">Sua senha</label>
            <input name="cadastro" required="required" type="password" placeholder="Diigte sua senha" /> 
          </p>
                 
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="link">
            Ainda não possui uma conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="cadastro.php"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome">Seu nome</label>
            <input name="cadastro" required="required" type="text" placeholder="Entre com o seu nome (até 20 caracteres)" />
          </p>
           
          <p> 
            <label for="nomUsuario">Seu nome de usuário</label>
            <input name="cadastro" required="required" type="text" placeholder="Crie um nome de usuário (entre 5 e 10 caracteres)"/> 
          </p>
           
          <p> 
            <label for="senha">Sua senha</label>
            <input name="cadastro" required="required" type="password" placeholder="Crie sua senha (entre 5 e 10 caracteres)"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>  
</body>
</html>
