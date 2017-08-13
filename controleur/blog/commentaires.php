<?php
	include_once('../../modele/connexion_bdd.php');
	include_once('../../modele/blog/get_commentaires.php');
	include_once('../../modele/blog/get_billets.php');
	
	$commentaires = get_commentaires($_GET['id_billet']);
	$billets = get_billets($_GET['id_billet'],'');
;
	include_once('../../vue/blog/commentaires.php');
