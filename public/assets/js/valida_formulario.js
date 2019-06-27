         
         $(document).ready(function(){
            $("#formCadastro2").validate({
               rules:{
                   nome:{
                       required:true              
                   },                  
                   dia_nas:{
                       required:true, 
                       minlength: 1
                   },
                   mes_nas:{
                       required:true, 
                       minlength: 1
                   },
                   ano_nas:{
                       required:true, 
                       minlength: 4
                   },
                   curso:{
                       required:true, 
                       
                   },
                  cep1:{
                       required:true, 
                       minlength: 9
                   },
                   cpf_cnpj:{
                       required:true,
                       minlength:14,
                       cpf:true
                   },
                   telefone:{
                       required:true,              
                       minlength: 9
                    },                     
                   rua:{
                       required:true        
                   },
                   n_rua:{
                       required:true        
                   },                   
                   bairro:{
                       required:true        
                   },
                   uf:{
                       required:true        
                   },
                   cidade:{
                       required:true        
                   }, mes:{
                       required:true        
                   }, email:{
                       required:true        
                   }                  
               } 
            });
        });