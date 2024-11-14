<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Rest</title>

		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?= get_stylesheet_directory_uri();?>/style.css">
	</head>

	<body>

	<header>
		<nav>
			<ul>
				<li class="current_page_item"><a href="index.php">Menu</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="contato.php">Contato</a></li>
			</ul>
		</nav>

		<h1><img src="<?= get_stylesheet_directory_uri();?>/img/rest.png" alt="Rest"></h1>

		<p>Rua Marechal 29 – Copacabana – Rj</p>
		<p class="telefone">2422-9201</p>
		<?= wp_head(); ?>
	</header>