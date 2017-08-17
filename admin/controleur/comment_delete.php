<?php
	include_once('../../modele/connexion_bdd.php');
	include_once('../modele/comment_delete_function.php');

	comment_delete($_POST['comment_to_delete']);
	header('Location: index.php');
