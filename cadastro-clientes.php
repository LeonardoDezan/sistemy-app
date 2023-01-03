<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $data_cadastro = $_POST['data_cadastro'];
    $tipo = $_POST['tipo'];
    $cnpj = $_POST['cnpj'];
    $razao_social = $_POST['razao-social'];
    $ie = $_POST['ie'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $fone_compras = $_POST['fone-compras'];
    $comprador = $_POST['comprador'];

}

?>