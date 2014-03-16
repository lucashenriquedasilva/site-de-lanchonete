<?php 
	date_default_timezone_set('America/Sao_paulo');
	$p = 'inicio';
	$p = $_GET['p']; 
?>

<!doctype html>

<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="author" content="Lucas Henrique" />

	<link rel="stylesheet" href="assets/css/style.css">
	<title>Mega Sarro</title>
</head>

<body>

	<header class="back-header">
		<header class="all header">
			<figure class="brand">
				<img src="assets/img/brand.png" alt="">
			</figure>
		</header>
		
	</header>

	<section class="back-nav">
		<section class="all">
			<nav class="nav">
				<ul>
					<li><a href="index.php?p=inicio">Início</a></li>
					<li><a href="index.php?p=quem_somos">Quem Somos</a></li>
					<li><a href="index.php?p=galeria">Galeria</a></li>
					<li><a href="index.php?p=cardapio">Cardápio</a></li>
					<li><a href="index.php?p=contato">Contato</a></li>
				</ul>
			</nav>
		</section>
	</section>
	
	<div class="all">

		<section class="back-contt">
			<section class="contt">
				<?php include 'view/'.$p.'.ms.php'; ?>
			</section>
		</section>
		
		<footer class="back-footer">
			<footer class="footer"><span class="copyright">&copy Copyright <?php echo date('Y'); ?></span></footer>
		</footer>
	</div>
</body>
</html>