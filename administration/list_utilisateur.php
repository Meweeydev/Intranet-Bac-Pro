<?php

function afficher()
{
	if(require("config.php"))
	{
		$req=$access->prepare("SELECT * FROM ticket ORDER BY id DESC");

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