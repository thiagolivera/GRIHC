<?php
	$_SESSION['p'] = "Livro";
	$pagina = $_SESSION['p'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="theme-color" content="#16a085">
    <title><?php echo $pagina . " | English Kingdom"?></title>
	
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	
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

<body>
<!-- MODAL -->
	<div class="modal fade" id="modalAjuda1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background-color: rgba(0, 0, 0, 0.56);">
	  <div class="modal-dialog" role="document" style="width: 200px ;margin: 120px auto;">
	    <a type="button"class="btn btn-warning pull-right" data-dismiss="modal">X</a>
	    <i><img id="imagem" src="img/ajuda-mago-livro.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
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
                            <i><img src="img/002-book.svg" alt="Livro" height="40" width="40"></i>   <?php echo $pagina?>
                            <small>
	                            <ol class="breadcrumb">
									<li><a href="index.php"><i class="ion-arrow-swap"></i>   Início</a></li>
									<li class="active"><?php echo $pagina?>   <a id="ajuda1" href="" onclick=""><img alt="" src="img/help.svg" style="width: auto;height: 15px;"></a></li>
								</ol>
                            </small>
                        </h1>
                        
            			<?php include 'personagem.php';?>

                <!-- /.row -->
                

                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center">
                                <h3 class="panel-title"><i class="fa fa-book" style=" color: #795548"></i> Capítulo 1</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                	<li style="list-style: none;">
                                    	<a href="#" class="list-group-item ">Primeiros Passos<i class="fa fa-check-circle pull-right" style="color: #4CAF50"></i></a>
                                    </li>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item ">Nações e nacionalidades<i class="fa fa-check-circle pull-right" style="color: #4CAF50"></i></a>
                                    </li>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item">Tipos de pães<i class="fa fa-check-circle pull-right" style="color: #4CAF50"></i></a>
                                    </a>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item">Bebidas<i class="fa fa-check-circle pull-right" style="color: #4CAF50"></i></a>
                                    </lo>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"  style="text-align: center"><i class="fa fa-book" style=" color: #795548"></i> Capítulo 2</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                	<li style="list-style: none;">
										<a href="#" class="list-group-item">Dias da semana<i class="fa fa-check-circle pull-right" style="color: #4CAF50"></i></a>
									</li>
                                	<li style="list-style: none;">
										<a href="q1.php" class="list-group-item">Membros da família   <i><img src="img/estrela-gif.gif" width="auto" height="15px" border="0"/></i><i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
									</li>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item">Alimentos<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
                                    </a>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item">Mais sobre refeições<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
                                    </li>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="text-align: center"><i class="fa fa-book" style=" color: #795548"></i> Capítulo 3</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                	<li style="list-style: none;">
                                    	<a href="#" class="list-group-item">Roupas<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
                                    </li>
                                    <li style="list-style: none;">
										<a href="#" class="list-group-item disabled">Meses do ano<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
									</a>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item disabled">Natal<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
                                    </li>
                                    <li style="list-style: none;">
										<a href="#" class="list-group-item disabled">Idades<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
									</li>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"  style="text-align: center"><i class="fa fa-book" style=" color: #795548"></i> Capítulo 4</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                	<li style="list-style: none;">
                                    	<a href="#" class="list-group-item disabled ">Corpo humano<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
                                    </li>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item disabled">Estações do ano<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
                                    </a>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item disabled">Profissões<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
                                    </li>
                                    <li style="list-style: none;">
                                    	<a href="#" class="list-group-item disabled">Reino animal<i class="fa fa-circle-o pull-right" style="color: gray"></i></a>
                                    </lo>
                                </div>
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
