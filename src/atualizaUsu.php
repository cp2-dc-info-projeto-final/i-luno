<?php

requere_once('conexao.php);

$codigo=$POST ['txtcodigo'];
$nome=$POST ['txtNome'];
Username=$POST ['Nomedeusuario'];

$Atualizar=mysqli_query ($conn,"UPDATE tbusuario set nome='$nome', Nomedeusuario='$Username', senha='$senha' Where 
 Id='$codigo'

 if ($atualizar==true){
     echo "<script>
     alert('Dados atualizados com sucesso');
     <window class="location href">paginainicial.php;
     <script>";

 }
 else{ 
     echo <script>
     alert('Falha na atualização dos dados');
     <window class="location href">paginainicial.php;
     <script>";
 }
 ?>