<?php
	function write_post($pseudo, $message) {
		global $bdd;
		$req = $bdd->prepare('INSERT INTO chat(id, pseudo, message, date_message)
			VALUES(NULL, ?, ?, NOW())');
		$req->execute(array($pseudo, $message));

	}
