<?php session_start();
  include_once('../../modele/connexion_bdd.php');
  include_once('../modele/show_comments.php');

  $show_comments = show_comments($_POST['bill_for_comments']);

  include_once('../vue/index.php');
