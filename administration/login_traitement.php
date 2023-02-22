<?php
session_start();

require_once '../config_inscr.php';

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    $check = $bdd->prepare('SELECT username , password from administrateur where username = ?');
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
                $_SESSION["test"] = true;
              //  $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;     
                header('Location:../administ.php');
            }else header('Location:login_admin.php?login_err=password');
        }else header('Location:login_admin.php?login_err=username');
        
    }else header('Location:login_admin.php?login_err=already');
}else header('Location:../administ.php'); 