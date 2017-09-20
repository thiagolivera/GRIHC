<?php 
class item{
	public $imagem;
	public $nome;
	public $ataque;
	public $defesa;
	public $especial;
	public $preco;
}

$item1 = new item();
$item1->imagem = 'img/023-sword-1.svg';
$item1->nome = 'Espada Cavaleiro Veloz';
$item1->ataque = '15 - 22';
$item1->defesa = '2 - 6';
$item1->especial = "+5% de defesa";
$item1->preco = "10 moedas";
$item1->total = 1;

$item2 = new item();
$item2->imagem = 'img/pipeta-vida-1.svg';
$item2->nome = 'Porção pequena de vida';
$item2->ataque = '0';
$item2->defesa = '0';
$item2->especial = "+20 de vida";
$item2->preco = '80 moedas';
$item2->total = '3';

$item3 = new item();
$item3->imagem = 'img/028-shield-4.svg';
$item3->nome = 'Escudo dos Iniciantes';
$item3->ataque = '1 - 2';
$item3->defesa = '50 - 55';
$item3->especial = "+8% de defesa";
$item3->preco = '22 moedas';
$item3->total = '1';

$item4 = new item();
$item4->imagem = 'img/024-swords.svg';
$item4->nome = 'Espadas Curtas';
$item4->ataque = '20 - 30';
$item4->defesa = '6 - 4';
$item4->especial = "+5% de defesa";
$item4->preco = "40 moedas";
$item4->total = '4';

/*
$item5 = new item();
$item5->imagem = 'img/028-shield-4.svg';
$item5->nome = 'Escudo dos Iniciantes';
$item5->ataque = '2 - 5';
$item5->defesa = '50 - 55';
$item5->especial = "+8% de defesa";
$item5->preco = '22 moedas';
$item5->total = '1';
*/

$item6 = new item();
$item6->imagem = 'img/025-sword.svg';
$item6->nome = 'Espadas Médias';
$item6->ataque = '35 - 42';
$item6->defesa = '10 - 15';
$item6->especial = "+10% de ataque";
$item6->preco = '20 moedas';
$item6->total = 1;

$item7 = new item();
$item7->imagem = 'img/032-shield.svg';
$item7->nome = 'Escudo Coração Valente';
$item7->ataque = '10 - 12';
$item7->defesa = '100 - 120';
$item7->especial = "+30% de defesa";
$item7->preco = "138 moedas";
$item7->total = '1';

$item8 = new item();
$item8->imagem = 'img/029-shield-3.svg';
$item8->nome = 'Escudo Extraterreno';
$item8->ataque = '2 - 10';
$item8->defesa = '120 - 150';
$item8->especial = "+15% de defesa";
$item8->preco = '151 moedas';
$item8->total = '1';

$item9 = new item();
$item9->imagem = 'img/pipeta-vida-2.svg';
$item9->nome = 'Porção Grande de Vida';
$item9->ataque = '2';
$item9->defesa = '50';
$item9->especial = "+40 de vida";
$item9->preco = '160 moedas';
$item9->total = '1';

$item10 = new item();
$item10->imagem = 'img/pipeta-ataque-1.svg';
$item10->nome = 'Porção Energética';
$item10->ataque = '0';
$item10->defesa = '0';
$item10->especial = "+50% de ataque";
$item10->preco = '200 moedas';
$item10->total = '1';

$item11 = new item();
$item11->imagem = 'img/rich.svg';
$item11->nome = 'Porta moeda';
$item11->ataque = '0';
$item11->defesa = '0';
$item11->especial = "Capacidade de 100 moedas";
$item11->preco = '3 moedas';
$item11->total = '1';

?>