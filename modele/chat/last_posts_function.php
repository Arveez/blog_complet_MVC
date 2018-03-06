<?php
	function last_posts() {
		global $bdd;
		$req = $bdd->query('SELECT pseudo, message, date_message FROM chat ORDER BY date_message DESC LIMIT 0, 10');
		$last_posts = $req->fetchAll();
		return $last_posts;
		$req->closeCursor();

	}
