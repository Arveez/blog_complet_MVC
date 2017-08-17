<?php session_start();
	include_once('../../modele/connexion_bdd.php');
	include_once('../../modele/blog/write_comment_function.php');
	write_comment($_POST['id_billet'], $_SESSION['pseudo'], $_POST['comment_content']);
	print_r($_POST);

	header('Location: ../../index.php');
