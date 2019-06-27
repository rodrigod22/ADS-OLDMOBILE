<?php require __DIR__ . '/../header.php'; 

    $listaProd = new \Rpa\Ordemaq\Controller\ListarProduto(); 
    $produtos = $listaProd->processaRequisicao();
   

?>


<div class="container">
    <h2>Lista Produtos</h2>
    <?php foreach ($produtos as $prod): ?>
    <div class="row">Nome <?php echo $prod->getNome();?> </div>
    <div class="row">Descrição <?php echo $prod->getDescricao();?> </div>
    <div class="row">Categoria <?php echo $prod->getCategoria();?> </div>
    
    
     <?php endforeach ?>    
</div>

<?php require __DIR__ . '/../footer.php'; ?>