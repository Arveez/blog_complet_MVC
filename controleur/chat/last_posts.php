<?php
	include_once('../../modele/connexion_bdd.php');
	include_once('../../modele/chat/last_posts_function.php');
	$last_posts = last_posts();
	foreach ($last_posts as $key => $value) { ?>
		<p><?php echo $value['pseudo'].' : '.$value['message'];?></p>
	<?php } ?>
