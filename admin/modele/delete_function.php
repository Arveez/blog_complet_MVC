<?php
  function delete($to_delete)
  {
    global $bdd;
    $req = $bdd->prepare('DELETE from billets WHERE titre = ?');
    $req->execute(array($to_delete));

  }
