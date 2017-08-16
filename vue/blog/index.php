<!DOCTYPE html>
<html>
<head>
	<title>BLOGO</title>
	<link rel="stylesheet" href="vue/blog/style.css" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width;initial-scale=1">

</head>
<body>
	<section>
		<p>
			<?php if (isset($_SESSION['id_groupe']) && $_SESSION['id_groupe'] == 1) { ?>
				<a href="admin/controleur/index.php">ADMIN</a><br />
				<a href="controleur/blog/deconnexion_membre.php">DECONNEXION</a>
			<?php } elseif (isset($_SESSION['id_groupe']) && $_SESSION['id_groupe'] == 99) { ?>
				<a href="controleur/blog/deconnexion_membre.php">DECONNEXION</a>
			<?php } else { ?>
				<a href="vue/membres/connexion-inscription.php">CONNEXION</a><br />
			<?php } ?>
		<h1>BLOGO</h1>
		<div id="billets">
			<?php foreach ($billets as $key => $value) { ?>
				<div class="billet">
					<h2><?php echo $value['titre'] ?></h2>
					<p><?php echo ($value['contenu']) ?></p>
					<a href="controleur/blog/commentaires.php?id_billet=<?php echo $value['id'] ?>">Commentaires</a>
				</div>
			<?php
			}
			?>
		</div>
	</section>
</body>
</html>
