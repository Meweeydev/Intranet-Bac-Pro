<?php 
    try

    {
        $bdd = new PDO('mysql:host=localhost;dbname=intranet;charset=utf8', 'admin', 'Huscrecerman71*');
    } catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }
