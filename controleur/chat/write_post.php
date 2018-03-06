<?php session_start();
	include_once('../../modele/connexion_bdd.php');
	include_once('../../modele/chat/write_post_function.php');
	write_post($_SESSION['pseudo'], $_POST['post_to_write']);
	header('Location: ../../index.php');
