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
				<?php	
				}
				?>
			</div>
	</section>	
</body>
</html>