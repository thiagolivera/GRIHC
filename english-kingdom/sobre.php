<?php
	$_SESSION['p'] = "Sobre";
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
                            <i><img src="img/about.svg" alt="Sobre" height="40" width="40"></i>   <?php echo $pagina?>
                            <small>
	                            <ol class="breadcrumb">
									<li><a href="index.php"><i class="ion-arrow-swap"></i>   Início</a></li>
									<li class="active"><?php echo $pagina?> </li>
								</ol>
                            </small>
                        </h1>

                <!-- /.row -->
					
					<div class="col-xs-12 col-sm-12 col-md-6">
					<p style="text-align: justify;">A maioria das escolas públicas não possuem ensino de inglês para alunos de 7 a 10 anos e 
					o principal motivo é a carência de professores capacitados. Isso impossibilita que as 
					crianças tenham o contato com a língua inglesa. As turmas iniciais possuem um grande 
					número de alunos competitivos e interativos. </p>
					<p style="text-align: justify;">Visando solucionar esse problema, apresentamos 
					o English Kingdom, uma plataforma viciante, onde as lições são organizadas em pequenas fases 
					definidas pelo instrutor de ensino de forma fácil e prática. 
					As atividades são divididas em desafios semanais e metas diárias dando a total sensação 
					de estarem em um pequeno jogo medieval. O usuário pode comprar itens no mercado, com 
					as moedas adquiridas das atividades realizadas.
					<p style="text-align: justify;">As atividades incentivam a leitura, escrita 
					e compreensão do idioma. Além disso, o English Kingdom possibilita que os usuários trabalhem 
					em equipe para derrotar os monstros que aterrorizam a vila semanalmente.
					<p style="text-align: justify;">Finalmente os alunos poderão utilizar uma plataforma divertida para o ensino de inglês.</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<iframe width="100%" height="300px" class="embed-responsive-item" src="https://www.youtube.com/embed/m5ElsLTdlkw" frameborder="0" allowfullscreen></iframe>
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
