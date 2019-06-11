<?php 

// verificarAutenticacao();

function estaLogado(){
	if (isset($_SESSION['autenticado'])) {
		return true;
	} else {
		return false;
	}
}

function verificarAutenticacao(){
	if (!isset($_SESSION['autenticado'])) {
		header('Location: '.$indexPHP.'?login=fail');
	}
}

function tipoCarta($id){
	switch ($id) {
		case '1':
			return 'Monstro';
			break;
		
		case '2':
			return 'Mágica';
			break;

		case '3':
			return 'Armadilha';
			break;

		default:
			return 'Não Identificado';
			break;
	}
}

?>