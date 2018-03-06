<?php
  function show_comments($titre)
  {
    global $bdd;
    $req = $bdd->prepare('SELECT id, auteur, contenu_commentaire FROM commentaires WHERE id_billet = ?');
    $req->execute(array($titre));
    $show_comments = $req->fetchAll();
    return $show_comments;
  }
