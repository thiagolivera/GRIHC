<?php
	$_SESSION['p'] = "Equipe";
	$pagina = $_SESSION['p'];
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

<body>
<!-- MODAL -->
	<div class="modal fade" id="modalAjuda1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background-color: rgba(0, 0, 0, 0.56);">
	  <div class="modal-dialog" role="document" style="width: 200px ;margin: 120px auto;">
	    <a type="button"class="btn btn-warning pull-right" data-dismiss="modal">X</a>
	    <i><img id="imagem" src="img/ajuda-mago-<?php echo $pagina;?>.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
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
                            <i><img src="img/team.svg" alt="Equipe" height="40" width="40"></i>   <?php echo $pagina?>
                            <small>
	                            <ol class="breadcrumb">
									<li><a href="index.php"><i class="ion-arrow-swap"></i>   Início</a></li>
									<li class="active"><?php echo $pagina?>    <a id="ajuda1" href="" onclick=""><img alt="" src="img/help.svg" style="width: auto;height: 15px;"></a></li>
								</ol>
                            </small>
                        </h1>

                <!-- /.row -->
					
					<?php include 'boss.php';?>                
                
                    <div class="col-xs-12 col-sm-8 col-md-9">
						<div class="panel panel-primary">
	                        <div class="panel-heading">
	                            Bate-papo da Equipe
	                        </div>
	                        <div class="panel-body">
	                            <p><label style="color: blue">Jackson: </label>  Diz aí Jeremias! Estamos quase ganhando!  <small style="color: lightgray">   15:30</small></p>
	                            <p><label style="color: red">Jéssica: </label>  Vou avisar pra o Jerônimo...  <small style="color: lightgray">   15:32</small></p>
	                            <p><label style="color: limegreen">Jerônimo: </label>  Eu sabia! Nossa equipe é a melhor! <i class="fa fa-heart" style="color:red"></i>  <small style="color: lightgray">   16:02</small></p>
	                            <p><label style="color: blue">Jackson: </label>  Podemos nos reunir pra fazer alguns exercícios?  <small style="color: lightgray">   16:20</small></p>
	                            <p><label style="color: red">Jéssica: </label>  Quando?  <small style="color: lightgray">   16:32</small></p>
	                            <p><label style="color: blue">Jackson: </label>  Hoje depois de jantar.  <small style="color: lightgray">   16:38</small></p>
	                            <p><label style="color: limegreen">Jerônimo: </label>  Isso! Quero derrotar esse lobo o quanto antes!  <small style="color: lightgray">   16:40</small></p>
	                            <p><label style="color: blue">Jackson: </label>  Já acabou jéssica? <small style="color: lightgray">   20:30</small></p>
	                            
	                        </div>
	                        <div class="panel-footer">
	                            <div class="row">
	                            	<div class="col-xs-12 form-group">
			                            <div class="form-group">
				                            <label>Mensagem: </label>
				                            <textarea class="form-control" rows="3"></textarea>
			                            </div>
			                            <div class="form-group" style="margin-bottom: 0px;">
				                            <button type="submit" class="btn btn-primary">Enviar</button>
			                            </div>
			                        </div>
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
