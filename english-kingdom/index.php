<?php
	session_start();
	$_SESSION['p'] = "Início";
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


	<style type="text/css">
		.fundo{
			background-image: url(img/hills.svg);
			height: 350px;
			background-size: cover;
			background-position: bottom center;
		}
	</style>

</head>

<body style="background-color: white">
	<!-- MODAL -->
	<div class="modal fade" id="modalAjuda1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background-color: rgba(0, 0, 0, 0.56);">
	  <div class="modal-dialog" role="document" style="width: 200px ;margin: 120px auto;">
	    <a type="button"class="btn btn-warning pull-right" data-dismiss="modal">X</a>
	    <i><img id="imagem" src="img/ajuda-mago-1.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
	  </div>
	</div>
      <!-- /MODAL -->
      
      <!-- MODAL -->
	<div class="modal fade" id="modalAjuda2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background-color: rgba(0, 0, 0, 0.56);">
	  <div class="modal-dialog" role="document" style="width: 200px;margin: 120px auto;">
	    <a type="button"class="btn btn-warning pull-right" data-dismiss="modal">X</a>
	    <i><img id="imagem" src="img/ajuda-mago-2.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
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
                    	<div class="row">
                    		<div class="col-lg-12">
		                        <h1 class="page-header">
		                            <i><img src="img/cottage.svg" alt="Início" height="40" width="40"></i>  <?php echo $pagina?>
		                            <small>   Visão Geral 
		                            </small>
		                        </h1>
							</div>
							
                        </div>
						<?php include 'personagem.php';?>
			
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div>Meta Diária <a id="ajuda1" href="" onclick=""><img class="pull-right" alt="" src="img/help.svg" style="width: auto;height: 20px;"></div></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover table-striped" style="text-align: center;">
                            	<tr class="info">
                            		<td style="width: 40%; text-align: left;"><a href="q1.php">Membros da família   <i><img src="img/estrela-gif.gif" width="auto" height="15px" border="0"/></i></a></td>
                            		<td style="width: 30%;">
	                         			<div class="progress" style="margin-bottom: 0px;">
								  			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
								  				aria-valuemin="0" aria-valuemax="100" style="width:70%;">
								    			<span class="">70%</span>
								  			</div>
										</div>
                            		</td>
                            		<td><span class="pull-right"><img alt="" src="img/coins.svg" style="width: 30px; padding-left: 5px; padding-right:5px"></img>  8  </span></td>
                            		<td><span class="pull-right"><img alt="" src="img/xp.svg" style="width: 30px; padding-left: 5px; padding-right:5px"></img>  16  </span></td>
                            	</tr>
                            </table>
                              
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div>Desafios Semanais <a id="ajuda2" href="" onclick=""><img class="pull-right" alt="" src="img/help.svg" style="width: auto;height: 20px;"></div></a>
                                    </div>
                                </div>
                            </div>
                            
                            <table class="table table-hover table-striped" style="text-align: center;">
                            	<tr class="success">
                            		<td style="width: 40%; text-align: left;"><a href="q1.php">Alimentos</a></td>
                            		<td style="width: 30%;">
	                         			<div class="progress" style="margin-bottom: 0px;">
								  			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
								  				aria-valuemin="0" aria-valuemax="100" style="width:50%;">
								    			<span class="">50%</span>
								  			</div>
										</div>
                            		</td>
                            		<td><span class="pull-right"><img alt="" src="img/coins.svg" style="width: 30px; padding-left: 5px; padding-right:5px"></img>  8  </span></td>
                            		<td><span class="pull-right"><img alt="" src="img/xp.svg" style="width: 30px; padding-left: 5px; padding-right:5px"></img>  16  </span></td>
                            	</tr>
                            	<tr class="">
                            		<td style="width: 40%; text-align: left;"><a href="q1.php">Mais sobre refeições</a></td>
                            		<td style="width: 30%;">
	                         			<div class="progress" style="margin-bottom: 0px;">
								  			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
								  				aria-valuemin="0" aria-valuemax="100" style="width:70%;">
								    			<span class="">70%</span>
								  			</div>
										</div>
                            		</td>
                            		<td><span class="pull-right"><img alt="" src="img/coins.svg" style="width: 30px; padding-left: 5px; padding-right:5px"></img>  5  </span></td>
                            		<td><span class="pull-right"><img alt="" src="img/xp.svg" style="width: 30px; padding-left: 5px; padding-right:5px"></img>  10  </span></td>
                            	</tr>
                            	<tr class="success">
                            		<td style="width: 40%; text-align: left;"><a href="q1.php">Roupas</a></td>
                            		<td style="width: 30%;">
	                         			<div class="progress" style="margin-bottom: 0px;">
								  			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
								  				aria-valuemin="0" aria-valuemax="100" style="width:50%;">
								    			<span class="">50%</span>
								  			</div>
										</div>
                            		</td>
                            		<td><span class="pull-right"><img alt="" src="img/coins.svg" style="width: 30px; padding-left: 5px; padding-right:5px"></img>  7  </span></td>
                            		<td><span class="pull-right"><img alt="" src="img/xp.svg" style="width: 30px; padding-left: 5px; padding-right:5px"></img>  14  </span></td>
                            	</tr>
                            </table>
                            
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

               

                <div class="row">
                	<div class="col-xs-12">
                    	<div class="fundo" >
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
    document.getElementById("ajuda2").onclick = function(e) {
        modalAjuda2();
        e.preventDefault();
    }

    function modalAjuda1() {
		$("#modalAjuda1").modal();
    }
    function modalAjuda2() {
		$("#modalAjuda2").modal();
    }
    
    
    </script>
	
</body>

</html>
