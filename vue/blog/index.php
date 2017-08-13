<!DOCTYPE html>
<html>
<head>
	<title>BLOG</title>
	<link rel="stylesheet" href="vue/blog/style.css" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width;initial-scale=1">

	</style>
</head>
<body>
	<section>
		<h1>BLOG</h1>
		<div id="billets">
			<?php foreach ($billets as $key => $value) { ?>
				<div class="billet">
					<h2><?php echo $value['titre'] ?></h2>
					<p><?php echo $value['contenu'] ?></p>
					<a href="controleur/blog/commentaires.php?id_billet=<?php echo $value['id'] ?>">Commentaires</a>
				</div>
			<?php
			}
			?>
		</div>
	</section>	
</body>
</html>