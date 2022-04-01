<?php
 $operacao = $_POST['operacao'];
  if($operacao == 'buscar'){

 include('conecta.php');
 $nomeusu = $_POST['nomeusu'];
 $sql = "SELECT * FROM usuarios WHERE nomeusu like %$nomeusu%';";
 $mysqli_result = mysqli_query($mysqli,$sql);
 $linhas = mysqli_num_rows($mysqli_result);
   
 for($i=0; $i < $linhas; $i++){
 $usuarios = mysqli_fetch_array($mysqli_result);
 echo 'nomUsuario:'.$usuario['nomUsuario']."<br>";
 echo 'Senha:'.$usuario['senha']."<br>";
 echo 'Nome:'.$usuario['nome']."<br>";
 echo "----------------------------------<br>";
 }
 mysqli_close($mysqli);
}
?>
