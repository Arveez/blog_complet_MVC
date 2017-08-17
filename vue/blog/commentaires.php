<!DOCTYPE html>
<html>
<head>
	<title>BLOG</title>
	<link rel="stylesheet" href="../../vue/blog/style.css" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width;initial-scale=1">
</head>
<body>
	<section>
		<a href="../../index.php">RETOUR</a>
 		<h1>BLOG</h1>
			<div id="billet">
				<h2><?php echo $billets[0]['titre']; ?></h2>
				<p><?php echo $billets[0]['contenu']; ?></p>
			</div>

			<div id="commentaires">
				<h3>Commentaires</h3>
				<?php foreach ($commentaires as $key => $value) { ?>
					<strong><?php echo $value['auteur']; ?></strong><br />
					<p><?php echo $value['contenu_commentaire']; ?></p>
				<?php	}	?>
				<?php if (isset($_SESSION['pseudo'])) { ?>
					<form method="post" action="../../controleur/blog/write_comment.php">
						<textarea id="comment_content" name="comment_content" rows="4" cols="80"></textarea>
						<input type="submit" value="POSTER">
						<input type="hidden" name="id_billet" value="<?php echo $billets[0]['id']; ?>">
					</form>
				<?php } ?>
			</div>
	</section>
</body>
</html>
