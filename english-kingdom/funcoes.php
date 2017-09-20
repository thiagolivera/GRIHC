<?php
function pagina($p){
	if($_SESSION['p'] == "início"){
		echo "active";
	}elseif ($_SESSION['p'] == "livro"){
		echo "active";
	}elseif ($_SESSION['p'] == "inventário"){
		echo "active";
	}elseif ($_SESSION['p'] == "mercado"){
		echo "active";
	}elseif ($_SESSION['p'] == "turma"){
		echo "active";
	}elseif ($_SESSION['p'] == "história"){
		echo "active";
	}elseif ($_SESSION['p'] == "equipe"){
		echo "active";
	}
}