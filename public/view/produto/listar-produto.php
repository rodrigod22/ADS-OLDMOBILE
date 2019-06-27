<?php include __DIR__. '/../header.php';?>
<div class="container">
    
   
    
    <div class="row mt-5 mb-3 justify-content-center"><h2>Lista Produtos</h2></div>
    
    <ul class="list-group">
        <?php foreach($produtos as $prod):?>
        <li class="list-group-item">            
            <?= $prod->getNome();?>
        </li>
         <?php endforeach?>
    </ul>   
</div>
<?php include  __DIR__ . '/../footer.php';?>