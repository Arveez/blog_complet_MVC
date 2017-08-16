<?php session_start();
include_once('../../modele/connexion_bdd.php');
include_once('../../modele/membres/check_id.php');

// ultétieurement : sécruriser les données partout avec des regex.

$pass_hash = hash('sha256', 'Gr'.$_POST['pass']);

$checkId = check_id($_POST['pseudo'], $pass_hash);
if ($checkId)
{
  $_SESSION['pseudo'] = $checkId[0]['pseudo'];
  $_SESSION['id_membre'] = $checkId[0]['id'];
  $_SESSION['id_groupe'] = $checkId[0]['id_groupe'];
  header('Location: ../../index.php');
}
if (! $checkId)
{
  header('Location: ../../vue/membres/connexion-inscription.php?wrong="wrong"');
}
