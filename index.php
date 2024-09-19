<?php
    require_once 'produto.class.php';
    require_once 'fornecedor.class.php';

    //Um fornecedor e quais produtos fornece    

    $produto1 = new Produto('Caderno', 'Caderno da barbie', 37.99, 1000);

    $produto2 = new Produto('Caderno Espiral', 'Caderno com 200fl', 29.99, 1000);

    $fornecedor = new Fornecedor('Tilibra', 'Tilibra', '11.111.111/0001-23', '(14)99999-8745', array($produto1, $produto2));

    $produto3 = new Produto('Agenda', 'Agenda 1014', 50.00, 150);$fornecedor -> setProduto($produto3);       

    // echo '<pre>';
    // var_dump($fornecedor);
    // echo '</pre>';

    echo  '<h3>Fornecedor</h3>';
    echo "Razão Social: {$fornecedor -> getRazao()} <br>";
    echo "Nome Fantasia: {$fornecedor -> getNomeFantasia()} <br>";
    echo "CNPJ: {$fornecedor -> getCnpj()} <br>";
    echo "Telefone: {$fornecedor -> getTelefone()} <br>";

    echo '<h4>Produtos</h4>';

    foreach($fornecedor -> getProduto() as $produto){
        echo "Nome: {$produto -> getNome()} <br>";
        echo "Descrição: {$produto -> getDescricao()} <br>";
        echo "Preço: R$ " . number_format($produto -> getPreco(),2, ",",".") ."<br>";
        echo "Estoque: {$produto -> getEstoque()} <br>";
        echo "----------------------------------------------<br>";
    }

    //Um produto e quais fornecedores o fornecem

    $fornecedor1 = new Fornecedor('Faber Castell', 'Faber Castell', '22.222.222/0001-22', '(41) 98875-5263');
    
    $fornecedor2 = new Fornecedor('Pilot', 'Pilot', '33.333.33/0001-33', '(52) 98782-5463');
    
    $produto4 = new Produto('Borracha', 'Borracha macia que não borra', 3.10, 2500, array($fornecedor1, $fornecedor2));

    echo '<h3>Produto</h3>';
    echo "Nome: {$produto4 -> getNome()} <br>";
    echo "Descrição: {$produto4 -> getDescricao()} <br>";
    echo "Preço:" . number_format($produto4 -> getPreco(), 2, ",", ".") . "<br>";
    echo "Estoque: {$produto4 -> getEstoque()} <br>";
    
    echo "<h4>Fornecedores do produto</h4>";

    foreach($produto4 -> getFornecedor() as $obj){
        echo "Razão Social: {$obj -> getRazao()} <br>";
        echo "Nome Fantasia: {$obj -> getNomeFantasia()} <br>";
        echo "CNPJ: {$obj -> getCnpj()} <br>";
        echo "Telefone: {$obj -> getTelefone()} <br>";
        echo "----------------------------------------------<br>";
    }

?>