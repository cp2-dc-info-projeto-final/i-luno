<? requere_once('operacao.php');
$Idusuario=$_GET['codigo'];
$consulta=mysqli_query($conn, "SELECT * FROM usuarios WHERE 'nomUsuario'");
$resultado=mysqli_fetch_array ($consulta );
?>

<center> <h1> Editar Registro de Usuário </h1> </center>
<hr>


     <center><h2> Nome: <?= $resultado[1];  ?> </h2></center>


<form method = "POST" action= "AtualizarDados.php.">;

  <input type="hidden" name="textcodigo" value="<?=$resultado[0];  ?">
  <label>Nome</label>
  <input type="text" name="textNome" value="<?=$resultado[1];  ?">
  <label>Nome</label>
   <input type="text" name="textUsername" value="<?=$resultado[2];  ?">
  <label>Nome</label>
  <input type="submit" name="btAtualização" value=" Atualizar Dados">


</form>