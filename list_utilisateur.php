<?php

function afficher()
{
	if(require("config_user.php"))
	{
		$req=$access->prepare("SELECT * FROM users ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("config.php"))
	{
		$req=$access->prepare("DELETE FROM ticket WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

?>