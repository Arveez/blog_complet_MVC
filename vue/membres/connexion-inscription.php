<!DOCTYPE html>
<html>
<head>
	<title>BLOGO</title>
	<link rel="stylesheet" href="../../vue/blog/style.css" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width;initial-scale=1">

</head>
<body>
	<section>
		<a href="../../index.php">RETOUR</a>
		<div id="connexion">
			<h3>connexion</h3>
			<form method="post" action="../../controleur/membres/connexion.php">
				<label for="pseudo" maxlength="40" >Pseudo</label> : <input type="text" name="pseudo" required="required"/><br />
		        <label for="pass">Mot de passe</label> : <input type="password" name="pass" required="required" />
		       	<input type="submit" />
			</form>
		</div>
		<div id="inscription">
			<h3>inscription</h3>
			<form method="post" action="../../controleur/membres/inscription.php">
				<label for="pseudo" maxlength="40" >Pseudo</label> : <input type="text" name="pseudo" required="required" placeholder="<?php if (isset($_GET['pris'])) {echo 'déjà pris';}; ?>" /><br />
		        <label for="pass">Mot de passe</label> : <input type="password" name="pass" required="required" placeholder="<?php if (isset($_GET['diff'])) {echo 'les mots de passe...';}; ?>" /><br />
		        <label for="pass2">Mot de passe</label> : <input type="password" name="pass2" required="required" placeholder="<?php if (isset($_GET['diff'])) {echo 'ne correspondent pas.';}; ?>" />
		        <label for="mail">E-mail : <input type="text" name="mail" id="mail" required="required" /><br/>
		       	<input type="submit" />
			</form>
		</div>
	</section>
</body>
</html>