<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=blog_complet_MVC;charset=utf8','blog','boota',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exemption $e)
	{
		die ('Erreur : '. $e->getMessage());
	}