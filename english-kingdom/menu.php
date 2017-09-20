
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav" style="background-color: #1abc9c">
			<li class="<?php if($_SESSION['p'] == "Início"){echo "active";}?>"><a href="index.php"><i><img src="img/cottage.svg" alt="Principal" height="25" width="25"></i>
			 		Início</a></li>
			<li class="<?php if($_SESSION['p'] == "Livro"){echo "active";}?>"><a href="livro.php"><i><img src="img/002-book.svg" alt="Livro" height="25" width="25"></i>
					Livro</a></li>
			<li class="<?php if($_SESSION['p'] == "Inventário"){echo "active";}?>"><a href="inventario.php"><i><img src="img/treasure-inventory.svg" alt="Inventário" height="25" width="25"></i>
					Inventário</a></li>
			<li class="<?php if($_SESSION['p'] == "Mercado"){echo "active";}?>"><a href="mercado.php"><i><img src="img/store.svg" alt="Mercado" height="25" width="25"></i> Mercado</a>
			</li>
			<li class="<?php if($_SESSION['p'] == "Turma"){echo "active";}?>"><a href="turma.php"><i><img src="img/blackboard.svg" alt="Turma" height="25" width="25"></i></i>
					Turma</a></li>
			<li class="<?php if($_SESSION['p'] == "História"){echo "active";}?>"><a href="historia.php"><i><img src="img/castle2.svg" alt="História" height="25" width="25"></i>
					História</a></li>
			<li class="<?php if($_SESSION['p'] == "Equipe"){echo "active";}?>"><a href="equipe.php"><i><img src="img/team.svg" alt="Equipe" height="25" width="25"></i></i>
					Equipe</a></li>
			<li class="<?php if($_SESSION['p'] == "Sobre"){echo "active";}?>"><a href="sobre.php"><i><img src="img/about.svg" alt="Sobre" height="25" width="25"></i></i>
					Sobre</a></li>
			<!--  <li>
<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
<ul id="demo" class="collapse">
<li>
<a href="#">Dropdown Item</a>
</li>
<li>
<a href="#">Dropdown Item</a>
</li>
</ul>
</li> -->

		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>
