<?php
include_once "config.php"; 
?>

<?php
$id = $_GET['id'];
mysqli_set_charset($conexao, "utf8");
$result_nomes = "SELECT * FROM tb_clientes WHERE id = '$id' LIMIT 1";
$resultado_nomes = mysqli_query($conexao, $result_nomes);
while ($linha = mysqli_fetch_array($resultado_nomes)){
    $tipo = $linha['id'];
    $cnpj = $linha['cnpj'];
    $razao_social = $linha['razao_social'];
    $ie = $linha['ie'];
    $endereco = $linha['endereco'];
    $bairro = $linha['bairro'];
    $cidade = $linha['cidade'];
    $email = $linha['email'];
    $fone_compras = $linha['fone_compras'];
    $comprador = $linha['comprador'];
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro-clientes.css">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <form action="../pesquisa.php" name="formpesquisar" method="get">
        <label for="pesquisar">Pesquisar</label>
        <input type="text" name="pesquisar" id="pesquisar">
        <input type="submit" value="Buscar">


    </form>
    <form method="post" name="cliente" action="../cadastro-clientes.php">
        <!-- TIPO DE CLIENTE -->
        <div>
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" maxlength="20" value="<?php echo $tipo; ?>">
        </div>
        <!-- CNPJ -->
        <div>
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" maxlength="14" placeholder="Somente Números" value="<?php echo $cnpj; ?>">
        </div>
        <!-- RAZÃO SOCIAL -->
        <div>
            <label for="razao_social">Razão Social:</label>
            <input type="text" id="razao_social" name="razao_social" maxlength="50" value="<?php echo $razao_social; ?>">
        </div>
        <!-- IE -->
        <div>
            <label for="ie">Inscrição Estadual:</label>
            <input type="text" id="ie" name="ie" maxlength="9" value="<?php echo $ie; ?>">
        </div>
        <!-- ENDEREÇO -->
        <div>
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco" maxlength="150" value="<?php echo $endereco; ?>">
        </div>
        <!-- BAIRRO -->
        <div>
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" maxlength="50" value="<?php echo $bairro; ?>">
        </div>
        <!-- CIDADE -->
        <div>
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" maxlength="50" value="<?php echo $cidade; ?>">
        </div>
        <!-- EMAIL -->
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        </div>
        <!-- TELEFONE COMPRAS -->
        <div>
            <label for="fone_compras">Telefone Compras:</label>
            <input type="text" id="fone_compras" name="fone_compras" maxlength="11" value="<?php echo $fone_compras; ?>">
        </div>
        <!-- COMPRADOR -->
        <div>
            <label for="comprador">Comprador:</label>
            <input type="text" id="comprador" name="comprador" maxlength="50" value="<?php echo $comprador; ?>">
        </div>
        <!-- SUBMIT -->
        <div>
            <input type="submit" name="salvar" value="salvar">
        </div>
        

    </form>
    
</body>
</html>
