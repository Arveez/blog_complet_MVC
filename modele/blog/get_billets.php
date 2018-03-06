<?php
	function get_billets($arg)
	{
		global $bdd;

		if (! isset($_GET['id_billet']))
		{
			$arg = (int) $arg;

		  	$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d %m %Y\') AS date_creation_fr FROM billets ORDER BY id DESC LIMIT :arg, 5');
			$req->bindParam(':arg', $arg, PDO::PARAM_INT);
			$req->execute();

		}
		else
		{
			$req = $bdd->prepare('SELECT * FROM billets WHERE id = :id_billet');
			$req->execute(array(
				':id_billet' => $arg
				));
		}
		$billets = $req->fetchAll();

		return $billets;

		$req->closeCursor();

	}
