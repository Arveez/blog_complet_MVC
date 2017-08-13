<?php
	include_once('modele/blog/get_billets.php');
	$billets = get_billets(0);

	foreach ($billets as $key => $value) {
		$billets[$key]['titre'] = htmlspecialchars($value['titre']);
		$billet[$key]['contenu'] = nl2br(htmlspecialchars($value['contenu']));
	};
	
	include_once('vue/blog/index.php');
	
