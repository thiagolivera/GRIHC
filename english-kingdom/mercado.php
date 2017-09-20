<?php
	$_SESSION['p'] = "Mercado";
	$pagina = $_SESSION['p'];
	
	include_once 'itens.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta name="theme-color" content="#16a085">
    <title><?php echo $pagina . " | English Kingdom"?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
	.modal-img{
		padding-left: 20px;
    	padding-right: 20px;
    }
    .modal-text{
    	padding-left: 20px;
    	padding-right: 20px;
    }
    
</style>
<body style="background-color:white">
<!-- MODAL -->
	<div class="modal fade" id="modalAjuda1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background-color: rgba(0, 0, 0, 0.56);">
	  <div class="modal-dialog" role="document" style="width: 200px ;margin: 120px auto;">
	    <a type="button"class="btn btn-warning pull-right" data-dismiss="modal">X</a>
	    <i><img id="imagem" src="img/ajuda-mago-<?php echo $pagina;?>.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
	  </div>
	</div>
<!-- /MODAL -->
	<!-- MODAL -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-question-circle">   </i>   Confirmar</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
		      	<div class="col-xs-12 col-sm-4">
		        	<i><img class="modal-img" id="imagem" src="" alt="Livro" height="auto" width="100%"></i>
		        </div>
	        	<p id="nomeitem" class="modal-text"></p>
	        </div>
	       </div>
	      <div class="modal-footer">
	      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Sim</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
	      </div>
	    </div>
	  </div>
	</div>
      <!-- /MODAL -->
      <!-- MODAL -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-info-circle">   </i>   Sucesso!</h4>
	      </div>
	      <div class="modal-body">
	      	
	        	<p id="">Compra finalizada com sucesso. Visite o <a href="inventario.php"> Inventário</a> para acessar o seu novo item.</p>
	        
	       </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
	      </div>
	    </div>
	  </div>
	</div>
      <!-- /MODAL -->

    <div id="wrapper">

        <?php
	        include "menu-topo.php";
			include "menu.php";
		?>
        
        <div id="page-wrapper">

            <div class="container-fluid">
			
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i><img src="img/store.svg" alt="Mercado" height="40" width="40"></i>   <?php echo $pagina?>
                            <small>
	                            <ol class="breadcrumb">
									<li><a href="index.php"><i class="ion-arrow-swap"></i>   Início</a></li>
									<li class="active"><?php echo $pagina?>      <a id="ajuda1" href="" onclick=""><img alt="" src="img/help.svg" style="width: auto;height: 15px;"></a></li>
								</ol>
                            </small>
                        </h1>
                        
            			<?php include 'personagem.php';?>

                <!-- /.row -->
                

                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="list-group">
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item1->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item1->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item1->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item1->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item1->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item1->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item1->nome;?>"
													data-imagem="<?php echo $item1->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item2->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item2->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item2->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item2->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item2->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item2->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item2->nome;?>"
													data-imagem="<?php echo $item2->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item3->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item3->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item3->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item3->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item3->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item3->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item3->nome;?>"
													data-imagem="<?php echo $item3->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item4->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item4->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item4->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item4->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item4->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item4->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item4->nome;?>"
													data-imagem="<?php echo $item4->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item6->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item6->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item6->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item6->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item6->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item6->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item6->nome;?>"
													data-imagem="<?php echo $item6->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item7->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item7->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item7->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item7->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item7->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item7->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item7->nome;?>"
													data-imagem="<?php echo $item7->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item8->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item8->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item8->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item8->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item8->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item8->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item8->nome;?>"
													data-imagem="<?php echo $item8->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item9->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item9->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item9->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item9->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item9->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item9->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item9->nome;?>"
													data-imagem="<?php echo $item9->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									<div class="col-xs-12  col-sm-12 col-lg-4 list-group-item" style="border: 0;">
										<form method="post">
	                                		<div class="col-xs-4">
	                                			<i><img src="<?php echo $item10->imagem;?>" alt="Livro" height="auto" width="100%"></i>
	                                		</div>
	                                		<div class="col-xs-8">
	                                			<strong><?php echo $item10->nome;?></strong><br>
	                                			<strong>Ataque:</strong> <?php echo $item10->ataque;?><br>
	                                			<strong>Defesa:</strong> <?php echo $item10->defesa;?><br>
	                                			<strong>Especial:</strong> <?php echo $item10->especial;?><br>
	                                			<strong>Preço:</strong> <?php echo $item10->preco;?> 
												<button type="button" class="btn btn-warning col-xs-12" data-toggle="modal" data-target="#exampleModal" 
													data-nomeitem="<?php echo $item10->nome;?>"
													data-imagem="<?php echo $item10->imagem;?>">Comprar</button>
		                                	</div>
		                                </form>
									</div>
									
                            </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <script type="text/javascript">
    	$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipientImagem = button.data('imagem')
			var recipientNomeItem = button.data('nomeitem')// Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    	  	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    	  	var modal = $(this)
    	  	modal.find('#nomeitem').text('Tem certeza que deseja comprar o item	' + recipientNomeItem + ' ?')
    	  	modal.find('#imagem').attr('src',		recipientImagem)
    	});
    	$('#exampleModal2').on('show.bs.modal', function (event) {
    		$("#exampleModal .close").click()
    		
    		
    		//$('#exampleModal').modal('toggle');
    		
			
    	});
    	

    </script>
    <script type="text/javascript">

    document.getElementById("ajuda1").onclick = function(e) {
        modalAjuda1();
        e.preventDefault();
    }
    
    function modalAjuda1() {
		$("#modalAjuda1").modal();
    }
    
    </script>

</body>


</html>
