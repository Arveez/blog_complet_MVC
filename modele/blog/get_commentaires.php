<?php
	function get_commentaires($id_billet){
	global $bdd;
	$id_billet = (int) $id_billet;
	$req = $bdd->prepare('SELECT auteur, contenu_commentaire, DATE_FORMAT (date_commentaire, \'%d %m %Y à %hh et %imin\') FROM commentaires WHERE id_billet=:id_billet ORDER BY date_commentaire DESC');
	$req->bindParam(':id_billet', $id_billet, PDO::PARAM_INT);
	$req->execute();
	$commentaires = $req->fetchAll();
	return $commentaires;
}