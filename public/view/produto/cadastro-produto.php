<?php 
session_start();
require __DIR__ . '/../header.php'; 

$categorias = new ADS\OldMobile\Controller\CategoriaController;
$listaCategoria = $categorias->findAll();

?>       
        <div class="container">
            
            <h2 class="mt-4">Cadastro Produto</h2>
            <div class="form-group">
                <form method="post" action="salva-produto">
                    
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                    
                    <label for="categoria">Categoria</label>
                    <select name="categoria" class="form-control">
                         <option value="0">Selecione</option>
                        <?php  foreach ($listaCategoria as $cat):?>
                        
                       
                        <option value="<?= $cat->getId(); ?>"><?= $cat->getNome();?></option>
                       
                        <?php  endforeach ?>
                    </select>
                    
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao"  class="form-control">
                    
                    <label for="codigo">Código</label>
                    <input type="text" name="codigo" id="codigo"  class="form-control">
                    
                     <label for="fornecedor">Fornecedor</label>                  
                    <select name="fornecedor" class="form-control">
                        <option value="0">Selecione</option>
                        <option value="1">China</option>
                        <option value="2">EUA</option>
                        <option value="3">Japão</option>                      
                    </select>
                    
                     <label for="dimensao">Dimensões</label>
                    <input type="text" name="dimensao" id="dimensao"  class="form-control">    
                     
                    <label for="cor">Cor</label>
                     <select name="cor" class="form-control">
                        <option value="0">Selecione</option>
                        <option value="1">Azul</option>
                        <option value="2">Vermelho</option>
                        <option value="3">Preto</option> 
                        <option value="3">Amarelo</option>              
                    </select>                         
                    
                     <label for="qtd">Quantidade Estoque</label>
                     
                    <input type="text" name="qtd" id="qtd"  class="form-control">   
                    <?php if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
?>
                  
                    <input type="submit" value="Cadastrar" class="btn btn-primary mt-3"/>                    
                </form>               
            </div>           
        </div>

<?php require __DIR__ . '/../footer.php'; ?>