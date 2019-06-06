<!DOCTYPE html>
<?php include('../../inc/funcoesGerais.php') ?>
<html>
<header>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</header>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Yugioh</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">

	    	<li class="nav-item dropdown">
	    	  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    	    Cartas
	    	  </a>
	    	  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	    	    <a class="dropdown-item" href="<?=$indexPHP?>/pages/carta/index.php">Listar Cartas</a>
	    	    <a class="dropdown-item" href="#">Cartas Favoritas</a>
	    	  </div>

	    	</li>

	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Deck
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?=$indexPHP?>/pages/deck/index.php">Listar Decks</a>
	          <a class="dropdown-item" href="#">Criar Deck</a>
	        </div>
	        <div class="">
	       	<a href="<?=$indexPHP?>/logout.php">
	        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
	        </div>
	        </a>
	      </li>
	    </ul>
<!-- 	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
	  </div>
	</nav>