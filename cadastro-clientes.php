<!-- BACK END DA PAGINA cadastro-clientes.html -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
</html>

<!-- INCLUSÃO DE ARQUIVOS -->
<?php
include_once "config.php";

?>

<!-- INCLUIR UM NOVO REGISTRO NO BANCO DE DADOS -->
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tipo = $_POST['tipo'];
    $cnpj = $_POST['cnpj'];
    $razao_social = $_POST['razao_social'];
    $ie = $_POST['ie'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $fone_compras = $_POST['fone_compras'];
    $comprador = $_POST['comprador'];

    $sql = "INSERT INTO tb_clientes(tipo, cnpj, razao_social, ie, endereco, bairro, cidade, email,fone_compras,comprador)VALUES('$tipo','$cnpj','$razao_social','$ie','$endereco','$bairro','$cidade','$email','$fone_compras','$comprador')";

    if(mysqli_query($conexao, $sql)){
        header("Location:html/cadastro-clientes.html");
    }else{
        echo "deu erro" . $sql . "<br/>" . mysqli_error($conexao);
   }
    mysqli_close($conexao);


    
}

?>