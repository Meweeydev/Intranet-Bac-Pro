<?php

require_once 'config_inscr.php';

if(  isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']) && isset($_POST['bdd_test']))
{
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);
    $bdd_test = htmlspecialchars($_POST['bdd_test']);

    $check = $bdd->prepare('SELECT username, email, password FROM utilisateur WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0)
    {
        if(strlen($username) <= 100)
        {
            if(strlen($email) <= 100)
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    if($password == $password_retype)
                    {
                        if(strlen($password_retype) <= 100)
                        {
                            $password = hash('sha256', $password);

                        if($bdd_test == 'administrateur')
                            {
                        $insert = $bdd->prepare('INSERT INTO administrateur(username, email, password) VALUES(:username, :email, :password)'); 
                        $insert->execute(array(
                            'username' => $username,
                            'email' => $email,
                            'password' => $password
                        ));
                    header('Location: administ.php?reg_err=success');
                      }else
                      $insert = $bdd->prepare('INSERT INTO utilisateur(username, email, password, pseudoauto) VALUES(:username, :email, :password, :pseudoauto)'); 
                      $insert->execute(array(
                          'username' => $username,
                          'email' => $email,
                          'password' => $password,
                          'pseudoauto' => $password_retype
                      ));
                      header('Location: administ.php?reg_err=success');

                        }else header('Location:administ.php?reg_err=password');
                    }else header('Location:administ.php?reg_err=password');
                }else header('Location:administ.php?reg_err=email');
            }else header('Location:administ.php?reg_err=email_length');
        }else header('Location:administ.php?reg_err=name_length');
    }else header('Location:administ.php?reg_err=already');
}