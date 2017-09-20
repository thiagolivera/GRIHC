<?php
$_SESSION['p'] = "Membros da Família - Questão 6";
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
	
	
	<style>
		.titulo{
			font-size: xx-large;
		    font-style: inherit;
		    padding-bottom: 25px;
		}
	</style>
	
</head>

<body onload='tutorial()'>
	<!-- MODAL -->	
		
	<div class="modal fade" id="tutorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background-color: rgba(0, 0, 0, 0.56);">
	  <div class="modal-dialog" role="document" style="width: 600px;margin: 120px auto;">
	  	<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding: 5px 10px 5px 10px; background-color: rgb(255, 255, 255)"><span aria-hidden="true">&times;</span></button>
	    <i><img id="imagem" src="img/mago1.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
	    <a type="button"class="btn btn-warning pull-right" data-dismiss="modal">Continuar</a>

	  </div>
	</div>
      <!-- /MODAL -->
	<!-- MODAL CERTO-->	
	
	<div class="modal fade" data-backdrop="static" id="certo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background-color: rgba(0, 0, 0, 0.56);">
	  <div class="modal-dialog" role="document" style="width: 400px;margin: 120px auto;">
	    <i><img id="imagem" src="img/sword.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
	    <a type="button" onclick="abreLink()"class="btn btn-warning pull-right" data-dismiss="modal">Continuar</a>

	  </div>
	</div>
      <!-- /MODAL -->
      <!-- MODAL ERRADO-->	
	
	<div class="modal fade" data-backdrop="static" id="errado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="background-color: rgba(0, 0, 0, 0.56);">
	  <div class="modal-dialog" role="document" style="width: 400px;margin: 120px auto;">
	    <i><img id="imagem" src="img/broken-heart.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
	    <a type="button" onclick="abreLink()"class="btn btn-warning pull-right" data-dismiss="modal">Continuar</a>

	  </div>
	</div>
      <!-- /MODAL -->
      
    </div>
  </div>

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
                            <i><img src="img/002-book.svg" alt="Inventário" height="40" width="40"></i>   <?php echo $pagina?>
                            <small>
	                            <ol class="breadcrumb">
									<li><a href="livro.php"><i class="ion-arrow-swap"></i>   Livro</a></li>
									<li class="active"><?php echo $pagina?></li>
								</ol>
                            </small>
                        </h1>
                        
    

                <!-- /.row -->
                

                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: center">
                                <form method="post" id="formResposta">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2" list-group-item" style="border: 0;">
	                                <div class="col-xs-4"><img src="img/hearts.svg" style="width: 30px"><img></div>
									<div class="col-xs-4"><img src="img/hearts.svg" style="width: 30px"><img></div>
	                                <div class="col-xs-4"><img src="img/hearts.svg" style="width: 30px"><img></div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-9 col-lg-10" style="margin-top: 4px;">
							      	<div class="progress">
							  			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
							  				aria-valuemin="0" aria-valuemax="100" style="width:85.8%">
							    			<span class=""></span>
							  			</div>
									</div>
								</div>
                                		
                                	<div class="row">
										<i class="col-xs-12 titulo">Relacione a figura com a palavra correta.</i>
                                	</div>
                                	<div class="row" style="margin-top: 10px">
                                		<div class="col-xs-12 col-sm-3 col-md-2 ">
                                			<i class="titulo"><img id="imagem" src="img/girl.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
                                		</div>
                                		<div class="col-xs-12 col-sm-9 col-md-10">
                                			<select id="sel1" class="form-control input-lg">
                                				<option value="Sister">Sister</option>
												<option value="Brother">Brother</option>
												<option value="Grandmother">Grandmother</option>
												<option value="Grandfather">Grandfather</option>
                                			</select>
                                		</div>
	                                </div>
	                                <div class="row" style="margin-top: 20px">
                                		<div class="col-xs-12 col-sm-3 col-md-2 ">
                                			<i class="titulo"><img id="imagem" src="img/boy.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
                                		</div>
                                		<div class="col-xs-12 col-sm-9 col-md-10">
                                			<select id="sel2" class="form-control input-lg">
                                				<option value="Sister">Sister</option>
												<option value="Brother">Brother</option>
												<option value="Grandmother">Grandmother</option>
												<option value="Grandfather">Grandfather</option>
                                			</select>
                                		</div>
	                                </div>
	                                <div class="row" style="margin-top: 20px">
                                		<div class="col-xs-12 col-sm-3 col-md-2 ">
                                			<i class="titulo"><img id="imagem" src="img/grandmother.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
                                		</div>
                                		<div class="col-xs-12 col-sm-9 col-md-10">
                                			<select id="sel3" class="form-control input-lg">
                                				<option value="Sister">Sister</option>
												<option value="Brother">Brother</option>
												<option value="Grandmother">Grandmother</option>
												<option value="Grandfather">Grandfather</option>
                                			</select>
                                		</div>
	                                </div><div class="row" style="margin-top: 20px">
                                		<div class="col-xs-12 col-sm-3 col-md-2 ">
                                			<i class="titulo"><img id="imagem" src="img/grandfather.svg" alt="Bom trabalho!" height="auto" width="100%"></i>
                                		</div>
                                		<div class="col-xs-12 col-sm-9 col-md-10">
                                			<select id="sel4" class="form-control input-lg">
                                				<option value="Sister">Sister</option>
												<option value="Brother">Brother</option>
												<option value="Grandmother">Grandmother</option>
												<option value="Grandfather">Grandfather</option>
                                			</select>
                                		</div>
	                                </div>
	                                	
	                                	
	                                	
	                                	<div class="col-xs-12 col-sm-12 col-md-2 pull-right">
										<button id="enviar" type="button" class="btn btn-primary col-xs-12" style="margin-bottom: 5px; margin-top: 25px;">
											Confirmar
										</button>
										
										</div>
										<div class="col-xs-12"><p id="erro" class="error"></p>	</div>
										</div>
								</form>	
								
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
    
    
    
    <script>
		document.getElementById("resposta").addEventListener("load", myFunction);
		document.getElementById("resposta").addEventListener("keydown", myFunction);
		document.getElementById("resposta").style.borderColor = "red";
		
		function myFunction() {
			var valor = document.getElementById("resposta").value;
			if(valor != ""){
				document.getElementById("resposta").style.borderColor = "green";
				document.getElementById("erro").innerHTML = "";
			}else if(valor == ""){
				document.getElementById("resposta").style.borderColor = "red";
			}
		}
	</script>
    
    <script type="text/javascript">

    document.getElementById("enviar").onclick = function(e) {
        mostrarValor();
        e.preventDefault();
    }

	
    function mostrarValor() {
    	var x1 = document.getElementById("sel1").selectedIndex;
        var y1 = document.getElementById("sel1").options;
        var x2 = document.getElementById("sel2").selectedIndex;
        var y2 = document.getElementById("sel2").options;
        var x3 = document.getElementById("sel3").selectedIndex;
        var y3 = document.getElementById("sel3").options;
        var x4 = document.getElementById("sel4").selectedIndex;
        var y4 = document.getElementById("sel4").options;

        var resp = false;
        var y = [y1,y2,y3,y4];
        var x = [x1,x2,x3,x4];
		var sel = ["Sister","Brother","Grandmother","Grandfather"];
		
		for(i=0; i < 4; i++){
			if(y[i][x[i]].text == sel[i]){
				resp = true;
			}else{
				resp = false;
				break;
			}
		}
		if(resp == true){
			$("#certo").modal();
		}else{
			$("#errado").modal();
		}
    	
    }
    
		
    </script>
    
    
    <script type="text/javascript">
    	$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipientImagem = button.data('imagem')
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    	  	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    	  	var modal = $(this)
    	  	modal.find('#imagem').attr('src',		recipientImagem)
    	});

    </script>
	<script>
		function abreLink(){
			window.open('q7.php',"_self");
		}
	</script>
	
</body>

</html>
