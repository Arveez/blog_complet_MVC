<?php
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass_hash, email, date_inscription, id_groupe) VALUES (:pseudo, :pass_hash, :email, NOW(), :id_groupe)');
$req->execute(array(
	':pseudo' => $_POST['pseudo'],
	':pass_hash' => $pass_hash,
	':email' => $_POST['mail'],
	':id_groupe' => 99
	));










/*function inscription($pseudo, $pass_hash, $email, $groupe)
{
		echo 	$pseudo.'<br />'.
				$pass_hash.'<br />'.
				$email.'<br />'.
				$groupe.'<br />';
	global $bdd;
	$req = $bdd->exec('INSERT INTO membres(pseudo, pass_hash, email, date_inscription, id_groupe) VALUES($pseudo, $pass_hash, $email, "2009-08-03 05:12:00", 99)');

/*	$req = $bdd->prepare('INSERT INTO membres(id, pseudo, pass_hash, email, date_inscription, id_groupe) VALUES(null, :pseudo, :pass_hash, :email, NOW(), :id_groupe');
	$req->execute(array(
		'pseudo' => $pseudo,
		'pass_hash' => $pass_hash,
		'email' => $email,
		'id_groupe' => $groupe
		)); */
