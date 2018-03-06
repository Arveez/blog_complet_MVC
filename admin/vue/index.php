<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="../../vue/blog/style.css" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width;initial-scale=1">
</head>
<body>
	<section>
		<a href="../../index.php">RETOUR</a>
		<div class="box" id="new">
      <h3>NOUVEAU BILLET</h3>
        <form method="post" action="../controleur/new_bill.php"
          <fieldset>
            <label for="title">Titre : </label><input type="text" id="title" name="title" />
            <br />
            <div id="bill">
              <label for="content">Contenu : </label><textarea name="content"></textarea>
              <input type="submit" value="PUBLIER"></input>
            </div>
          </fieldset>
        </form>

		</div>
		<div class="box" id="bill_delete">
      <h3>Supprimer un billet</h3>
			<form method="post" action="../controleur/delete.php">
				<select name="to_delete">
					<?php foreach ($all_titles as $key => $value) { ?>
						<<option value="<?php echo $value['titre']; ?>"><?php echo $value['titre']; ?></option>
					<?php	} ?>
				</select>
				<input type="submit" value="SUPPRIMER !"></input>
			</form>
    </div>
    <div class="box" id="comment_delete">
      <h3>Supprimer un commentaire</h3>
			<form method="post" action="../controleur/show_comments.php">
				<select name="bill_for_comments">
					<?php foreach ($all_titles as $key => $value) { ?>
						<option value="<?php echo $value['id']; ?>"><?php echo $value['titre']; ?></option>
					<?php	} ?>
				</select name="comment_to_delete">
				<input type="submit" value="CHOISIR">
			</form>
			<form method="post" action="../controleur/comment_delete.php">
				<select name="comment_to_delete">
					<?php foreach ($show_comments as $key =>$value) { ?>
						<option value="<?php echo $value['id']; ?>"><?php echo $value['auteur'].' : '.$value['contenu_commentaire']; ?></option>
					<?php } ?>
					<input type="submit" value="SUPPRIMER">
				</select>
			</form>
    </div>
	</section>
</body>
</html>
