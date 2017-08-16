<?php

function new_bill($title, $content)
{
  global $bdd;
  $req = $bdd->prepare('INSERT INTO billets(titre, contenu, date_creation) VALUES(?, ?, NOW())');
  $req->execute(array($_POST['title'], $_POST['content']));
  
}
