<?php
  function all_titles()
  {
    global $bdd;
    $req = $bdd->query('SELECT id, titre from billets ORDER BY id DESC');
    $all_titles = $req->fetchAll();
    $req->closeCursor();
    return $all_titles;
  }
