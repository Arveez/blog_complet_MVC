<?php
function check_pseudo($pseudo)
{
	global $bdd;
	$req = $bdd->prepare('SELECT * FROM membres WHERE pseudo = ?');
	$req->execute(array($pseudo));
	$result = $req->fetchAll();
	if ($result)
	{
		$free = false;
	}
	else
	{
		$free = true;
	}
	$req->closeCursor();
	return $free;
}