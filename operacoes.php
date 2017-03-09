
<?php
$servername = "mysql.hostinger.com.br";
$username = "u766101083_pac";
$password = "diamante";
$dbname = "u766101083_pac";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>


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
          <h4 class="lblModal">Salvar</h4>
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


<div id="editar" class="modal fade in" role="dialog">
		<div class="modal-dialog">
			
			<!-- Modal editar oeprações-->
			<div class="modal-content row">
				<div class="modal-header custom-modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="lblModal">EDITAR</h4>
				</div>
				<div class="modal-body">
					
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="name" id="name" placeholder="Tipo de Mercadoria">
						</div>
						
            
     <div class="form-group col-sm-12">
              <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
            </div>

        

						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="name" id="name" placeholder="Quantidade">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="name" id="name" placeholder="Preço">
						</div>
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="name" id="name" placeholder="Tipo de Negócio">
						</div>
						
						
					
						<div class="form-group col-sm-12">
							
  
      

  					
  		
  			
  						<button type="submit" class="btnConfirmar" data-toggle="modal" data-dismiss="modal" data-target="#ok">Confirmar</button align="left">
               <button type="submit" class="btnCancelar" data-toggle="modal" data-dismiss="modal"> <img src="img/cancelar.png"  height="20" width="20">  Cancelar</button align="left">
  
	
        
     					 </div>
    				</div>
  				</div>
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

					
					
				
				
<!-- START OF HTML FOR DEMO - NOT NEEDED -->
<div class="container">
   
      <div class="row">
      <div class="crud">
      
       <div class="">
         <div class="modal-header custom-modal-header">
            <h4 class="modal-title">operações</h4>
            
          </div>
          <div class="modal-body">
           
            <input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Filtro: Digite a palavra chave da pesquisa" />
          </div>
          <table class="table " id="task-table">
            <thead>
              <tr>
             



      
                <th>Código</th>
                <th>Tipo da Mercadoria</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Tipo do Negócio</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT idMerc,tipoMerc, nomeMerc, quantMerc, precoMerc, tipoNegocio FROM operacao";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    // saida de dados do select
    while($linha = $resultado->fetch_assoc()) {
        echo "<tr><td>".$linha["idMerc"]."</td>
        <td>".$linha["tipoMerc"]."</td>
         <td>".$linha["nomeMerc"]."</td>
        <td>".$linha["quantMerc"]."</td>
        <td>".$linha["precoMerc"]."</td>
        <td>".$linha["tipoNegocio"]."</td>
        <td><a class=\"btnEditar\" href=\"\" data-toggle=\"modal\" data-target=\"#editar\" title=\"Editar\" ></a>
<a class=\"btnExcluir\" href=\"\" data-toggle=\"modal\" data-target=\"#excluir\" title=\"Excluir\">
       </td> </tr>";
        
    }
    
} else {
    echo "Não há registros";
}
$conn->close();
?>
            
            </tbody>
          </table>
        </div>
      </div>
      </div>
    </div>
  </div>

<!-- START OF HTML FOR DEMO - NOT NEEDED -->

<div class="container">
 <td><a class="btnConfirmar" href="index.php"  title="Nova Operação" ><img src="img/new.png" width="20px" height="20px"></a></td>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

</body>
</html>

