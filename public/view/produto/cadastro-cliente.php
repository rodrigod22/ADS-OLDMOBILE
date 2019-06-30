<?php 
session_start();
require __DIR__ . '/../header.php'; 

$categorias = new ADS\OldMobile\Controller\CategoriaController;
$listaCategoria = $categorias->findAll();

?>       
 <script src="http://localhost/old-mobile/public/assets/js/jquery.mask.min"></script>  
 <script type="text/javascript">
        $(document).ready(function(){   
             
            $("#telefone").mask("99999-9999");
            
            
            $("#n_rua").mask("999999");
           
            $("#telefone-dig").mask("99");
           
       
            $("#cep").mask("99999-999");
          
            $("#uf").mask("AA");
            $("#cpf").mask("999.999.999-99", {
           
            });       
        });    
        </script> 
 
        <div class="container">
            
            <h2 class="mt-4 mb-4">Cadastro Cliente</h2>
            <div class="form-group">
                <form method="post" action="salva-cliente">
                    
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" 
                    value="<?php if(isset($_SESSION['nome'])){echo $_SESSION['nome'];unset($_SESSION['nome']);} ?>">                   
                    
                   <?php if(isset($_SESSION['msg-nome'])){?> 
                        <div class="alert-danger alert">
                           <?php echo $_SESSION['msg-nome'];unset($_SESSION['msg-nome']);?>
                        </div>
                   <?php } ?>
                    
                     
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"  class="form-control">
                     <?php if(isset($_SESSION['msg-email'])){?> 
                        <div class="alert-danger alert">
                           <?php echo $_SESSION['msg-email'];unset($_SESSION['msg-email']);?>
                        </div>
                    <?php } ?>
                   
                    <label for="telefone">Telefone</label><br>
                      <div class="form-check-inline">
                          ( <input type="text" name="telefone-dig" id="telefone-dig" style="width: 50px; text-align: center;" placeholder="ddd" class="form-inline">)
                    <input type="text" name="telefone" id="telefone" placeholder="telefone" class="form-inline ml-3 pl-2" >
                    </div>
                     <?php if(isset($_SESSION['msg-telefone'])){?> 
                        <div class="alert-danger alert mt-3">
                           <?php echo $_SESSION['msg-telefone'];unset($_SESSION['msg-telefone']);?>
                        </div>
                    <?php } ?>
                    
                    <div class="form-group mt-4">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf"  class="form-control">
                    </div>
                                      
                    <div class="row p-0 m-0 mt-5 mb-3"><h4>ENDEREÇO</h4></div>
                    <label for="rua">Rua</label>
                    <input type="text" name="rua" id="rua"  class="form-control"> 
                    
                    <label for="numero">Numero</label>
                    <input type="text" name="numero" id="numero"  class="form-control">
                    
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento"  class="form-control">
                    
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade"  class="form-control">
                    
                    <label for="cidade">UF</label>
                    <input type="text" name="uf" id="uf"  class="form-control">
                                       
                    <?php if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
?>
                  
                    <input type="submit" value="Cadastrar" class="btn btn-primary mt-3"/>                    
                </form>               
            </div>              
                    </div>             
        </div>

<?php require __DIR__ . '/../footer.php'; ?>