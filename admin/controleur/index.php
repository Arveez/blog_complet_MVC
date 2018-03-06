<?php session_start();
  include('../../modele/connexion_bdd.php');
  include('../modele/all_titles.php');
  $all_titles = all_titles();

  include('../vue/index.php');
