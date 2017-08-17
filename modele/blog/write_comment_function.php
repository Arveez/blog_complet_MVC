<?php
	function write_comment($id_billet, $author, $content)
	{
		global $bdd;
		$req = $bdd->prepare('INSERT INTO commentaires(id, id_billet, auteur, contenu_commentaire, date_commentaire) VALUES(NULL, :id_billet, :auteur, :contenu_commentaire, NOW())');
		$req->execute(array(
			':id_billet' => $id_billet,
			':auteur' => $author,
			':contenu_commentaire' => $content
		));
	};
