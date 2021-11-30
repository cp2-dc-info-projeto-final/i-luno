<?php
  session_start();
?> 
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="interface.css" media="screen" />
</head>
<body>

<h2>Faça seu login</h2>

<form action="operacao.php" method="POST">
  <div class="imgcontainer">
    <img src="logo.png" class="logo">
  </div>

  <div class="container">
    <form class="form-signin" method="POST" action="operacao.php">
    <label for="uname"><b>Nome de Usuário</b></label>
    <input type="text" placeholder="Digite seu nome de usuário" name="uname" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Digite sua senha" name="psw" required>
        
    <button type="submit" style="background-color:#43a759">Login</button>
    
    <button type="submit" style="background-color:#43a759">Cadastrar</button>
  </div>
    
  


</form>
<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
