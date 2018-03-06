<?php session_start();

// todo : sécurisation données
include_once('../../modele/connexion_bdd.php');
include_once('../modele/new_bill.php');
$new_bill = new_bill($_POST['title'], $_POST['content']);
header('Location: ../../index.php');
