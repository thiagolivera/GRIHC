<?php
	$_SESSION['p'] = "Turma";
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
                            <i><img src="img/blackboard.svg" alt="Turma" height="40" width="40"></i>   <?php echo $pagina?>
                            <small>
	                            <ol class="breadcrumb">
									<li><a href="index.php"><i class="ion-arrow-swap"></i>   Início</a></li>
									<li class="active"><?php echo $pagina?>        <a id="ajuda1" href="" onclick=""><img alt="" src="img/help.svg" style="width: auto;height: 15px;"></a></li>
								</ol>
                            </small>
                        </h1>
                        
            			<?php// include 'personagem.php';?>

                <!-- /.row -->
                

                <div class="row">
                    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    5 de Julho de 2017
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                <h3 class="timeline-header"><a href="#">A Equipe de Suporte</a> enviou uma mensagem</h3>

                <div class="timeline-body">
                  Sua turma está se dedicando bastante, por isso a equipe de suporte resolveu presentear todos vocês com o "Escudo Coração Valente". Aproveitem!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Ler mais</a>
                  <a class="btn btn-danger btn-xs">Apagar</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 minutos atrás</span>

                <h3 class="timeline-header no-border"><a href="#">Sarah Queiroz</a> entrou na turma</h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-maroon"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 27 mins atrás</span>

                <h3 class="timeline-header"><a href="#">Franciovaldo Brasil</a> comentou sua conquista</h3>

                <div class="timeline-body">
                  Você está mandando bem! Foi o primeiro a terminar as atividades da semana passada! Valeu!!! Parabéns!!!!
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-warning btn-flat btn-xs">Ver comentário</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    4 de Julho de 2017
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-check-circle bg-purple"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 1 dias atrás</span>

                <h3 class="timeline-header"><a href="#">João Thomaz</a> tirou 10 de vida do <strong>Lobo Feroz</strong> concluíndo a atividade <strong><a href="#">Dias da semana</a></strong>.</h3>

                
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-dollar bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 1 dia atrás</span>

                <h3 class="timeline-header"><a href="#">Paulo Silva</a> comprou <strong>Espada Cavaleiro Veloz</strong>.</h3>

              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-dollar bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 1 dia atrás</span>

                <h3 class="timeline-header"><a href="#">Paulo Silva</a> comprou <strong>Porção Pequena de Vida</strong>.</h3>

              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-dollar bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 1 dia atrás</span>

                <h3 class="timeline-header"><a href="#">Paulo Silva</a> comprou <strong>Escudo dos Iniciantes</strong>.</h3>

              </div>
            </li>
            <!-- END timeline item -->

</section>
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
<style>
/*!
 *   AdminLTE v2.4.0
 *   Author: Almsaeed Studio
 *	 Website: Almsaeed Studio <https://adminlte.io>
 *   License: Open source - MIT
 *           Please visit http://opensource.org/licenses/MIT for more information
 */


.timeline {
	position: relative;
	margin: 0 0 30px 0;
	padding: 0;
	list-style: none
}

.timeline:before {
	content: '';
	position: absolute;
	top: 0;
	bottom: 0;
	width: 4px;
	background: #ddd;
	left: 31px;
	margin: 0;
	border-radius: 2px
}

.timeline>li {
	position: relative;
	margin-right: 10px;
	margin-bottom: 15px
}

.timeline>li:before, .timeline>li:after {
	content: " ";
	display: table
}

.timeline>li:after {
	clear: both
}

.timeline>li>.timeline-item {
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
	border-radius: 3px;
	margin-top: 0;
	background: #fff;
	color: #444;
	margin-left: 60px;
	margin-right: 15px;
	padding: 0;
	position: relative
}

.timeline>li>.timeline-item>.time {
	color: #999;
	float: right;
	padding: 10px;
	font-size: 12px
}

.timeline>li>.timeline-item>.timeline-header {
	margin: 0;
	color: #555;
	border-bottom: 1px solid #f4f4f4;
	padding: 10px;
	font-size: 16px;
	line-height: 1.1
}

.timeline>li>.timeline-item>.timeline-header>a {
	font-weight: 600
}

.timeline>li>.timeline-item>.timeline-body, .timeline>li>.timeline-item>.timeline-footer
	{
	padding: 10px
}

.timeline>li>.fa, .timeline>li>.glyphicon, .timeline>li>.ion {
	width: 30px;
	height: 30px;
	font-size: 15px;
	line-height: 30px;
	position: absolute;
	color: #666;
	background: #d2d6de;
	border-radius: 50%;
	text-align: center;
	left: 18px;
	top: 0
}

.timeline>.time-label>span {
	font-weight: 600;
	padding: 5px;
	display: inline-block;
	background-color: #fff;
	border-radius: 4px
}

.timeline-inverse>li>.timeline-item {
	background: #f0f0f0;
	border: 1px solid #ddd;
	-webkit-box-shadow: none;
	box-shadow: none
}

.timeline-inverse>li>.timeline-item>.timeline-header {
	border-bottom-color: #ddd
}

.bg-red, .bg-yellow, .bg-aqua, .bg-blue, .bg-light-blue, .bg-green,
	.bg-navy, .bg-teal, .bg-olive, .bg-lime, .bg-orange, .bg-fuchsia,
	.bg-purple, .bg-maroon, .bg-black, .bg-red-active, .bg-yellow-active,
	.bg-aqua-active, .bg-blue-active, .bg-light-blue-active,
	.bg-green-active, .bg-navy-active, .bg-teal-active, .bg-olive-active,
	.bg-lime-active, .bg-orange-active, .bg-fuchsia-active,
	.bg-purple-active, .bg-maroon-active, .bg-black-active, .callout.callout-danger,
	.callout.callout-warning, .callout.callout-info, .callout.callout-success,
	.alert-success, .alert-danger, .alert-error, .alert-warning,
	.alert-info, .label-danger, .label-info, .label-warning, .label-primary,
	.label-success, .modal-primary .modal-body, .modal-primary .modal-header,
	.modal-primary .modal-footer, .modal-warning .modal-body,
	.modal-warning .modal-header, .modal-warning .modal-footer, .modal-info .modal-body,
	.modal-info .modal-header, .modal-info .modal-footer, .modal-success .modal-body,
	.modal-success .modal-header, .modal-success .modal-footer,
	.modal-danger .modal-body, .modal-danger .modal-header, .modal-danger .modal-footer
	{
	color: #fff !important
}

.bg-gray {
	color: #000;
	background-color: #d2d6de !important
}

.bg-gray-light {
	background-color: #f7f7f7
}

.bg-black {
	background-color: #111 !important
}

.bg-red, .callout.callout-danger, .alert-danger, .alert-error,
	.label-danger, .modal-danger .modal-body {
	background-color: #dd4b39 !important
}

.bg-yellow, .callout.callout-warning, .alert-warning, .label-warning,
	.modal-warning .modal-body {
	background-color: #f39c12 !important
}

.bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body
	{
	background-color: #00c0ef !important
}

.bg-blue {
	background-color: #0073b7 !important
}

.bg-light-blue, .label-primary, .modal-primary .modal-body {
	background-color: #3c8dbc !important
}

.bg-green, .callout.callout-success, .alert-success, .label-success,
	.modal-success .modal-body {
	background-color: #00a65a !important
}

.bg-navy {
	background-color: #001f3f !important
}

.bg-teal {
	background-color: #39cccc !important
}

.bg-olive {
	background-color: #3d9970 !important
}

.bg-lime {
	background-color: #01ff70 !important
}

.bg-orange {
	background-color: #ff851b !important
}

.bg-fuchsia {
	background-color: #f012be !important
}

.bg-purple {
	background-color: #605ca8 !important
}

.bg-maroon {
	background-color: #d81b60 !important
}

.bg-gray-active {
	color: #000;
	background-color: #b5bbc8 !important
}

.bg-black-active {
	background-color: #000 !important
}

.bg-red-active, .modal-danger .modal-header, .modal-danger .modal-footer
	{
	background-color: #d33724 !important
}

.bg-yellow-active, .modal-warning .modal-header, .modal-warning .modal-footer
	{
	background-color: #db8b0b !important
}

.bg-aqua-active, .modal-info .modal-header, .modal-info .modal-footer {
	background-color: #00a7d0 !important
}

.bg-blue-active {
	background-color: #005384 !important
}

.bg-light-blue-active, .modal-primary .modal-header, .modal-primary .modal-footer
	{
	background-color: #357ca5 !important
}

.bg-green-active, .modal-success .modal-header, .modal-success .modal-footer
	{
	background-color: #008d4c !important
}

.bg-navy-active {
	background-color: #001a35 !important
}

.bg-teal-active {
	background-color: #30bbbb !important
}

.bg-olive-active {
	background-color: #368763 !important
}

.bg-lime-active {
	background-color: #00e765 !important
}

.bg-orange-active {
	background-color: #ff7701 !important
}

.bg-fuchsia-active {
	background-color: #db0ead !important
}

.bg-purple-active {
	background-color: #555299 !important
}

.bg-maroon-active {
	background-color: #ca195a !important
}
</style>

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
