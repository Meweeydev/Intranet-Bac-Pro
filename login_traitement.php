<?php
session_start();

require_once 'config_inscr.php';

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    $check = $bdd->prepare('SELECT username , password from utilisateur where username = ?');
    $check->execute(array($username));
    $date = $check->fetch();
    $row = $check->rowCount();

    if ($row == 1 )
    {
        if(strlen($username) <= 100)
        {
            $password = hash('sha256', $password);

            if($date['password'] === $password)
            {
                $_SESSION["loggedin"] = true;
            //    $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;     
                header('Location:index.php');
            }else header('Location:login.php?login_err=password');
        }else header('Location:login.php?login_err= ');
        
    }else header('Location:login.php?login_err=already');
}else header('Location:index.php'); 