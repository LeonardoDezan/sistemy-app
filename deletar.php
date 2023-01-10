<?php
include_once "config.php";
?>

<!-- DELETAR REGISTROS NO BANCO DE DADOS -->
<?php
$id = $_GET['id'];
$sql = "DELETE FROM tb_clientes WHERE  id = '$id'";
if (mysqli_query($conexao, $sql)){
    header("Location: html/cadastro-clientes.html");
}else{
    echo 'Deu erro';
}


?>