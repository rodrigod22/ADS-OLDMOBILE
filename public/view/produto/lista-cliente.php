<?php require __DIR__ . '/../header.php'; 

    $listaClientes = new ADS\OldMobile\Controller\ListaCliente;
   ?>


<div class="container">
    <h2 class="mt-3 mb-3 ">Lista Clientes</h2>
    <?php foreach ($clientes as $cliente): ?>
    <div class="form-check mt-2 mb-4 border">
    <div class="row d-flex justify-content-between">Nome <?php echo $cliente->getNome();?> <span class="d-flex align-content-center"> <a class="btn btn-primary">Alterar</a> <a class="btn-danger btn">Deletar</a></span></div>
    <div class="row position-absolute ml-1 mt-4" style="left: 0; top: 0;">Email <?php echo $cliente->getEmail();?></div>  
    </div>
     <?php 
         
     endforeach ?>    
</div>

<?php require __DIR__ . '/../footer.php'; ?>