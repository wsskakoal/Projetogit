<?php  
$descricao = $_POST['descricao'];
$conteudo = $_POST['conteudo'];
$data = $_POST['data'];


//die (var_dump($usuario));
$conecta = new mysqli("localhost","kinyxapp_app","12345","kinyxapp_wyllian");
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
$sql = "INSERT INTO noticia (Descricao, Conteudo, DataEnvio) VALUES ('$descricao', '$conteudo', '$data')";
mysqli_query($conecta, $sql);
mysqli_close($conecta);
header("Location:index.php");

?>