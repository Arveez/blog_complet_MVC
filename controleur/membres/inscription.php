<?php session_start();
include_once('../../modele/connexion_bdd.php');

// checking valid pseudo

include_once('../../modele/membres/check_pseudo.php');
$free = check_pseudo($_POST['pseudo']);

if ($free == false)
{
	header('Location: ../../vue/membres/connexion-inscription.php?pris="pris"');
}

// checking matching passwords

if ($_POST['pass'] !== $_POST['pass2'])
{
	header('Location: ../../vue/membres/connexion-inscription.php?diff="diff"');
}
$pass_hash = hash('sha256', 'Gr'.$_POST['pass']);


// registering

include_once('../../modele/membres/inscription.php');
$inscription = inscription($_POST['pseudo'],$pass_hash,$_POST['email']);
include_once('../../modele/membres/check_id.php');
$checkId = check_id($_POST['pseudo'], $pass_hash);
$_SESSION['pseudo'] = $checkId[0]['pseudo'];
$_SESSION['id_membre'] = $checkId[0]['id'];
$_SESSION['id_groupe'] = $checkId[0]['id_groupe'];
header('Location: ../../index.php');
