<?php
	$_SESSION['p'] = "Inventário";
	$pagina = $_SESSION['p'];
	include '../itens.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $pagina . " | English Kingdom"?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- MODAL -->	
	
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="nomeitem"></h4>
	      </div>
	      <div class="modal-body">
	        <form>
	        	<div class="row">
	        	<div class="col-xs-12 col-sm-4">
	        		<i><img id="imagem" src="img/002-book.svg" alt="Livro" height="auto" width="100%"></i>
	        	</div>
	        	<div class="col-xs-12 col-sm-8">
		          <div class="form-group">
		            <label class="control-label">Ataque: </label><i id="ataque"></i>
		          </div>
		          <div class="form-group">
		            <label class="control-label">Defesa: </label><i id="defesa"></i>
		          </div>
		          <div class="form-group">
		            <label class="control-label">Especial: </label><i id="especial"></i>
		          </div>
		          <div class="form-group">
		            <label class="control-label">Estoque: </label><i id="estoque"></i>
		          </div>
	          	</div>
	          	</div>
			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	      </div>
	    </div>
	  </div>
	</div>
      <!-- /MODAL -->
      
    </div>
  </div>

    <div id="wrapper">

        <?php
	        include "../menu-topo.php";
			include "../menu.php";
		?>
        
        <div id="page-wrapper">

            <div class="container-fluid">
			
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i><img src="img/treasure-inventory.svg" alt="Inventário" height="40" width="40"></i>   <?php echo $pagina?>
                            <small>
	                            <ol class="breadcrumb">
									<li><a href="index.php"><i class="ion-arrow-swap"></i>   Início</a></li>
									<li class="active"><?php echo $pagina?></li>
								</ol>
                            </small>
                        </h1>
                        
            			<?php include 'personagem.php';?>

                <!-- /.row -->
                

                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 item-iventario list-group-item" style="border: 0;">
                                	<i><img src="<?php echo $item1->imagem;?>" alt="Livro" height="auto" width="100%"></i>
                                	<div style="text-align: center"><label><?php echo $item1->nome;?></div></label>
									<div class="btn btn-success col-xs-12" style="margin-bottom: 5px" >Equipado</div></a>
									<button type="button" class="btn btn-primary col-xs-12"  style="margin-bottom: 5px" data-toggle="modal" data-target="#exampleModal" 
										data-nomeitem="<?php echo $item1->nome;?>"
										data-ataque="<?php echo $item1->ataque;?>"
										data-defesa="<?php echo $item1->defesa;?>"
										data-especial="<?php echo $item1->especial;?>"
										data-imagem="<?php echo $item1->imagem;?>"
										data-estoque="<?php echo $item1->total;?>">
										Ver detalhes
									</button>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 item-iventario list-group-item" style="border: 0;">
                                	<i><img src="<?php echo $item2->imagem;?>" alt="Livro" height="auto" width="100%"></i>
                                	<div style="text-align: center"><label><?php echo $item2->nome;?></div></label>
									<div class="btn btn-warning col-xs-12" style="margin-bottom: 5px" >Equipar</div></a>
									<button type="button" class="btn btn-primary col-xs-12"  style="margin-bottom: 5px" data-toggle="modal" data-target="#exampleModal" 
										data-nomeitem="<?php echo $item2->nome;?>"
										data-ataque="<?php echo $item2->ataque;?>"
										data-defesa="<?php echo $item2->defesa;?>"
										data-especial="<?php echo $item2->especial;?>"
										data-imagem="<?php echo $item2->imagem;?>"
										data-estoque="<?php echo $item2->total;?>">
										Ver detalhes
									</button>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 item-iventario list-group-item" style="border: 0;">
                                	<i><img src="<?php echo $item3->imagem;?>" alt="Livro" height="auto" width="100%"></i>
                                	<div style="text-align: center"><label><?php echo $item3->nome;?></div></label>
									<div class="btn btn-success col-xs-12" style="margin-bottom: 5px" >Equipado</div></a>
									<button type="button" class="btn btn-primary col-xs-12"  style="margin-bottom: 5px" data-toggle="modal" data-target="#exampleModal" 
										data-nomeitem="<?php echo $item3->nome;?>"
										data-ataque="<?php echo $item3->ataque;?>"
										data-defesa="<?php echo $item3->defesa;?>"
										data-especial="<?php echo $item3->especial;?>"
										data-imagem="<?php echo $item3->imagem;?>"
										data-estoque="<?php echo $item3->total;?>">
										Ver detalhes
									</button>
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
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>
    
    <script type="text/javascript">
    	$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipientNomeItem = button.data('nomeitem')// Extract info from data-* attributes
			var recipientAtaque = button.data('ataque')
			var recipientDefesa = button.data('defesa')
			var recipientEspecial = button.data('especial')
			var recipientImagem = button.data('imagem')
			var recipientEstoque = button.data('estoque')
			
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    	  	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    	  	var modal = $(this)
    	  	modal.find('#nomeitem').text(	recipientNomeItem)
    	  	modal.find('#defesa').text(		' '+recipientAtaque)
    	  	modal.find('#ataque').text(		' '+recipientDefesa)
    	  	modal.find('#especial').text(	' '+recipientEspecial)
    	  	modal.find('#estoque').text(	' '+recipientEstoque)
    	  	modal.find('#imagem').attr('src',		recipientImagem)
    	});

    </script>

</body>

</html>
