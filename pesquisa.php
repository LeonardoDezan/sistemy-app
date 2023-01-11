<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro-clientes.css">
    <title>Cadastro de Cliente</title>
</head>
<?php
include_once "config.php";
?>

<?php
// PESQUISA DE INFORMAÇÕES NA TABELA DE CLIENTES DO BANCO DE DADOS
if (isset($_GET['pesquisar'])){
    $pesquisar = $_GET['pesquisar'];
    $resultado_pesquisar = "SELECT * FROM tb_clientes WHERE razao_social like '%$pesquisar%' or cnpj like '%$pesquisar%'";
    $resultado = mysqli_query($conexao, $resultado_pesquisar);
    while ($linha = mysqli_fetch_array($resultado)){
        echo $search_razao =$linha['id'];
        echo $search_razao =$linha['razao_social'];
        echo $search_razao =$linha['cnpj'];
        echo '<a href=deletar.php?id=' . $linha['id'] . '>Deletar</a> | <a href=editar.php?id=' . $linha['id'] . '>Editar</a>';
        echo "<br/>";
    }
    
}


?>