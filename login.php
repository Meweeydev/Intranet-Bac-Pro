<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Intranet BP SN</title>
    <link rel="icon" type="image/png" sizes="128x128" href="https://cdn.discordapp.com/attachments/666702291403014192/1018928176392581242/logo.png">
    <link rel="stylesheet" href="assets/css/login.css">

    <style>
        body{ font: 14px sans-serif; }
        .login-form {
        width: 400px;
        margin: 250px auto;
    }
    .login-form form {
        margin-bottom: 40px;
        background: #00236e2a;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;


    }
    
    </style>
</head>
<body style="background-image:url(assets/images/footer-bg.png)">
    <div class="login-form">

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
 <?php 
            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);

                switch($err)
                {
                    case 'password': 
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> Mot de pass incorrect
                    </div>
                    <?php
                    break;
                    case 'email':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> Email incorrect
                    </div>
                    <?php
                    break;
                    case 'already'
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> Compte non existant
                    </div>
                    <?php 
                    break;
                }
            }

            ?>  
            
<?php            
            // Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                        if (session_status() == PHP_SESSION_NONE) {
                                session_start();
                            }                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION['userlevel'] = $row['userlevel'];
                            $_SESSION["username"] = $username;
                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Nom d'utilisateur ou mot de passe invalide.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Nom d'utilisateur ou mot de passe invalide.";
                }
            } else{
                echo "Oups ! Un problème est survenu. Veuillez réessayer plus tard.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
            
<form action="login_traitement.php" method="post">
        <h2 class="text-center">Connexion</h2>

        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Nom D'utilisateur" required="required" autocomplete="off">
</div>
            <div class="form-group">
            <label>Mot de passe</label>
    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
</div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            
        </form>
        
    </div>
</body>
</html>
