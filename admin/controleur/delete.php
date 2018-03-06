<?php session_start();
  include('../../modele/connexion_bdd.php');
  include('../modele/delete_function.php');
  $delete = delete($_POST['to_delete']);
  header('Location: ../controleur/index.php');
