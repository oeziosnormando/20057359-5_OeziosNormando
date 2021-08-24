<?php 

/* 
Site: Doce Amor
Autor: Oézios Normando
Data: 18 de agosto, 2021
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'pages/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'pages/home.php';
		break;

	case 'quem_somos':
		include 'pages/quem_somos.php';
		break;

    case 'contato':
        include 'pages/contato.php';
        break;

	case 'detalhes_promocao':
		include 'pages/detalhes_promocao.php';
		break;

	default:
		include 'pages/home.php';
		break;
}

/* Carrega o footer.php */
include 'pages/footer.php';

