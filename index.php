<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Gestão Spa Pacotes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
       
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/styleTelas.css">

  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/local.js"></script>

       <script type="text/javascript" src="js/relatorio.js"></script>
  
</head>
<body>
<!-- navbar ferramentas-->
<nav class="ferramenta" role="navigation">

<div class="container" align="center">
    
  <h2 class="crud"><label class="pull-right">CRUD</label> </h2>
 

  
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    
  
  </div>
</div>
</nav>



<!-- Modal confirmação excluir-->

<div id="excluir" class="modal fade in" role="dialog">
    <div class="modal-dialog">




      
      
      <div class="modal-content row">
        <div class="modal-header custom-modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="lblModal">Excluir</h4>
        </div>
        <div class="modal-body">
          <form name="info_form" class="form-inline" action="#" method="post">
            <div class="form-group col-sm-12">
              <label class="">Deseja excluir este cadastro ?</label>
            </div>

        
        <div class="form-group col-sm-12">
        <button class="btnConfirmar" data-toggle="modal" data-dismiss="modal" data-target="#excluirok"> <img src="img/confirma.png"  height="20" width="20">  Confirmar</button>
        <button  data-dismiss="modal" class="btnCancelar"><img src="img/cancelar.png"  height="20" width="20">  Cancelar</button>
        </div>
            
          </form>
        </div>
        
      </div>
      
    </div>
  </div>

</div>

<!-- MODAL SALVAR ALTERAÇÃO Mercadoria-->
        <div id="ok" class="modal fade in" role="dialog">
    <div class="modal-dialog">
      
      <!-- Modal content-->
      <div class="modal-content row">
        <div class="modal-header custom-modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Salvar</h4>
        </div>
        <div class="modal-body">
          <div class="container">
  <h2>Operação salva com sucesso.</h2>
  <div class="list-group">
   
  </div>
</div>
            </div>
          </div>
        </div>
              
                             
            </div>

<!-- Mercadoria excluido com sucesso -->
            <div id="excluirok" class="modal fade in" role="dialog">
    <div class="modal-dialog">
      
      <!-- Modal content-->
      <div class="modal-content row">
        <div class="modal-header custom-modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="lblModal">Excluir</h4>
        </div>
        <div class="modal-body">
          <div class="container">
  <h2>Operação excluida com sucesso.</h2>
  <div class="list-group">
   
  </div>
</div>
            </div>
          </div>
        </div>
              
                             
            </div>



  <!--MENU-->
<nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
        <div class="navbar-toggler animate">
            <span class="menu-icon"></span>
        </div>
        <ul class="navbar-menu animate">
        
            <li>
                <a href="operacoes.php" class="animate">
                    <span class="desc animate"> Operações </span>
                    <span> <img src="img/pagamento.png"  align="center" height="20" width="20"></span>
                </a>
            </li>
           
           <li>

                <a href="index.php" class="animate">
                    <span class="desc animate"> Cadastrar </span>
                    <span> <img src="img/new.png"  align="center" height="20" width="20" ></span>
                </a>
            </li>
        </ul>
    </nav>




<!-- END OF HTML FOR DEMO - NOT NEEDED -->



<!--listagem de Pacotes-->
<br>
<br>
<div class="container">
   <div class="crud">
          	<div class="">
				<div class="modal-header custom-modal-header">
					<h4 class="modal-title">Nova Operação</h4>
				</div>
        </div>
				<div class="modal-body">
        <div class="crud">
					<form name="info_form" class="form-inline" action="processa_operacao.php" method="post">
						
						<div class="form-group col-sm-12">
            <label class="col-md-4 control-label" for="selectbasic"> Tipo de Mercadoria</label>
							<input type="text" class="form-control" name="tipoMerc" id="tipoMerc" required="required">
						</div>
						
					
					
							
  
  
      

  					
  			
  			<div class="form-group col-sm-12">
        <label class="col-md-4 control-label" for="selectbasic"> Nome</label>
  			<input type="text" class="form-control" name="nomeMerc" id="nomeMerc" placeholder=" "required="required" >
    		</div>
    		
    		<div class="form-group col-sm-12">
        <label class="col-md-4 control-label" for="selectbasic"> Quantidade</label>
  			<input type="text" class="form-control" name="quantMerc" id="quantMerc"  required="required">
    		</div>
    		<div class="form-group col-sm-12">
        <label class="col-md-4 control-label" for="selectbasic"> Preço</label>
  			<input type="text" class="form-control" name="precoMerc" id="precoMerc"  required="required">
    		</div>
    		
			<div class="form-group col-sm-12">
  			
  <label class="col-md-4 control-label" for="selectbasic" required="required"> Tipo do Negócio</label>
  <div class="col-md-4">
    <select id="tipoNegocio" name="tipoNegocio" class="form-control">
      <option value="Feminino" id="compra" name="compra" >Compra</option>
      <option value="Masculino" id="compra" name="venda">Venda</option>
    </select>
  </div>

    		</div>
      
        </div>
      
    		
    	
        
               <button  data-dismiss="modal" data-toggle="modal" data-target="index.php" class="btnConfirmar" type="submit"><img src="img/novo.png"  height="20" width="20">  Salvar</button>
               <button  data-dismiss="modal" class="btnCancelar"><img src="img/cancelar.png"  height="20" width="20">  Limpar</button>
  <div class="container">
      
        <br>
               
            </div>
  			</div>

  				
							
                             
						
					</form>
				</div>
				
			</div>
			
		</div>
	</div>

        </div>
      </div>
    </div>
  </div>
	
				
					
					
				
				
<!-- START OF HTML FOR DEMO - NOT NEEDED -->

<!-- START OF HTML FOR DEMO - NOT NEEDED -->

<div class="container">
<br>
<br>
<br>
<br>
<br>
<br>
</div>

</body>
</html>
