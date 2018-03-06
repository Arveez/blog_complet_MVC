<?php
	function comment_delete($del_id)
	{
		global $bdd;
		$req = $bdd->prepare('DELETE FROM commentaires WHERE id = ?');
		$req->execute(array($del_id));

	}
