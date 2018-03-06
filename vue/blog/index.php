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
		</p>
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
	<section id="chat">
		<h1>CHATTO</h1>
		<div id="last_posts">
		</div>
			<?php if (isset($_SESSION['pseudo'])) { ?>
				<form method="post" action="controleur/chat/write_post.php">
					<textarea id="message" name="post_to_write"></textarea>
					<input type="submit" value="POSTER">
				</form>
			<?php } else { ?>
				<a href="vue/membres/connexion-inscription.php">CONNEXION</a>
			<?php } ?>
	</section>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script>
	$(document).ready(function() {
		setInterval(function() {
			$('#last_posts').load('controleur/chat/last_posts.php')
		}, 1000
		);
	});
	</script>
</body>
</html>
