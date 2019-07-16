
<link rel="stylesheet" type="text/css" href="index.css" />
<?php
$conecta = new mysqli("localhost","kinyxapp_app","12345","kinyxapp_wyllian");
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
$sql = "SELECT * FROM noticia";
$query = mysqli_query($conecta, $sql);
$qtde = mysqli_num_rows($query);
?>
<body>
<table style="width:100%">
<tr>
  <th>Descrição</th>
  <th>Conteudo</th> 
  <th>Data de Envio</th>
</tr>
<?php
 while($linha = mysqli_fetch_array($query))
 {
   echo '<tr>';
   echo '<td>' . $linha['Descricao'] . '<br>';
   echo substr('<td>'.$linha["Conteudo"], 0, 20);
   echo '<td>' . $linha['DataEnvio'] . '<br>';
 }
?>
</table>
<div class="">
  <a href="cadastro.html"><h5> Cadastro </h5></a>     
</div>
<?php
mysqli_close($conecta);
?>
</body>
