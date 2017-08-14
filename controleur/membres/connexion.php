<?php

// ultétieurement : sécruriser les données partout avec des regex.

$pass_hash = hash('sha256', 'Gr'.$_POST['pass']);
include_once('../../modele/connexion_bdd.php');
include_once('../../modele/membres/check_id.php');
$checkId = check_id($_POST['pseudo'], $pass_hash);
if ($checkId)
{
print_r($checkId);
}
if (! $checkId)
{
  echo 'ya personne';
}
