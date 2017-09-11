<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Contato - GRIHC</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>

     <?php include './cabecalho.php'; echo $_SERVER['PHP_SELF']; ?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
        <div id="headerwrap" style="min-height: 200px; padding-bottom: 50px;">
            <div class="container">
                <div class="row">
                    <h1>Contato</h1>
                </div>
            </div>
        </div>
	 
	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h4>Entre em contato</h4>
	 			<div class="hline"></div>
		 			<p>Use o formulário abaixo para nos enviar sua mensagem.</p>
		 			<form role="form">
					  <div class="form-group">
					    <label for="InputName1">Seu nome</label>
					    <input type="text" class="form-control" id="nameContato">
					  </div>
					  <div class="form-group">
					    <label for="InputEmail1">E-mail</label>
					    <input type="email" class="form-control" id="emailContato">
					  </div>
					  <div class="form-group">
					    <label for="InputSubject1">Assunto</label>
					    <input type="email" class="form-control" id="assuntoContato">
					  </div>
					  <div class="form-group">
					  	<label for="message1">Mensagem</label>
					  	<textarea class="form-control" id="messagemContato" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-theme">Enviar</button>
					</form>
			</div><! --/col-lg-8 -->
	 		
	 		<div class="col-lg-4">
		 		<h4>Nosso Endereço</h4>
		 		<div class="hline"></div>
		 			<p>
                                            Universidade Federal do Ceará - Campus Russas <br>
                                            Rua Felipe Santiago, N° 411<br>
                                            Cidade Universitária, Russas - CE <br>
                                            CEP: 62.900-000<br>
                                            Brasil <br>
		 			</p>
		 			<p>
		 				Email: marilia.mendes@ufc.br<br/>
		 				Telefone: +55 88 3411-9209
		 			</p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
                            <div class="col-lg-6">
		 			<h4>Filiação</h4>
		 			<div class="hline-w"></div>
		 			<p>
                                            Universidade Federal do Ceará - Campus Russas <br>
                                            Rua Felipe Santiago, N° 411<br>
                                            Cidade Universitária, Russas - CE <br>
                                            CEP: 62.900-000<br>
                                            Brasil <br>
		 			</p>
                            </div>
                            <div class="col-lg-6 centered logoprincipal">
                                <img style="max-width: 300px;" src="assets/img/instituicoes/ufc.png" alt="">
                            </div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>


  </body>
</html>
