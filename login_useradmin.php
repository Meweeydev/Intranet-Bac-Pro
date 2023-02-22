<?php
session_start();

require_once 'config_inscr.php';

if(isset($_POST['username']))
{
    $username = htmlspecialchars($_POST['username']);

    $check = $bdd->prepare('SELECT username from utilisateur where username = ?');
    $check->execute(array($username));
    $date = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1 )
    {
        if(strlen($username) <= 100)
       
            {
                $_SESSION["admin"] = true; 
                $_SESSION["loggedin"] = true;
                //$_SESSION["id"] = $id;
                $_SESSION["username"] = $username;     
                header('Location:administruser.php');
        }else header('Location:administ.php?login_err=username');
        
    }else header('Location:administ.php?login_err=already');
}else header('Location:administruser.php'); 