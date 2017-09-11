        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" style="font-size: 20px;" href="index.php">GRIHC - RUSSAS</a>
            </div>
            <div class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                  <?php 
                    if(strcmp($_SERVER['PHP_SELF'], "/GRIHC/index.php") == 0){
                        ?><li class="active"><a href="index.php">INÍCIO</a></li><?php
                    } else{
                        ?><li><a href="index.php">INÍCIO</a></li><?php
                    }
                  ?>    
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROJETOS<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-header">Ensino</li>
                        <?php 
                            if(strcmp($_SERVER['PHP_SELF'], "/GRIHC/monitoriaIHC-2017.php") == 0){
                                ?><li class="active"><a href="monitoriaIHC-2017.php">Aplicação prática dos conceitos de IHC (2017)</a></li><?php
                            } else{
                                ?><li><a href="monitoriaIHC-2017.php">Aplicação prática dos conceitos de IHC (2017)</a></li><?php
                            }
                        ?> 
                    <li class="dropdown-header">Pesquisa</li>
                        <?php 
                        if(strcmp($_SERVER['PHP_SELF'], "/GRIHC/projetoMaltu.php") == 0){
                            ?><li class="active"><a href="projetoMaltu.php">Projeto MALTU (2016 - 2018)</a></li><?php
                        } else{
                            ?><li><a href="projetoMaltu.php">Projeto MALTU (2016 - 2018)</a></li><?php
                        }
                      ?>
                    <li class="dropdown-header">Extensão</li>
                        <?php 
                        if(strcmp($_SERVER['PHP_SELF'], "/GRIHC/extensaoIHC-2017.php") == 0){
                            ?><li class="active"><a href="extensaoIHC-2017.php">Projeto e desenvolvimento de sistemas acessíveis para o município de Russas (2017)</a></li><?php
                        } else{
                            ?><li><a href="projetoMaltu.php">Projeto e desenvolvimento de sistemas acessíveis para o município de Russas (2017)</a></li><?php
                        }
                      ?> 
                  </ul>
                </li>
                <?php 
                    if(strcmp($_SERVER['PHP_SELF'], "/GRIHC/contato.php") == 0){
                        ?><li class="active"><a href="contato.php">CONTATO</a></li><?php
                    } else{
                        ?><li><a href="contato.php">CONTATO</a></li><?php
                    }
                  ?> 
                
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>