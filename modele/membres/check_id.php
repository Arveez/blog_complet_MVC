<?php 
  function check_id($pseudo, $pass_hash)
  {
    global $bdd;
    $req = $bdd->prepare('SELECT id, pseudo, id_groupe FROM membres WHERE pseudo = ? AND pass_hash = ?');
    $req->execute(array($pseudo, $pass_hash));
    $checkId = $req->fetchAll();
    return $checkId;
    $req->closeCursor();
  }
