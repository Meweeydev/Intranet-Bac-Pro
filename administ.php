<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["test"]) || $_SESSION["test"] !== true){
    header("location: administration/login_admin.php");
    exit;
}


if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1200)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header("location: administration/login_admin.php");
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = hash('sha256', $new_password);
            $param_id = $utilisateur["username"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                header("location: administ.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}


?>





<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Admin - Intranet BP SN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/animated.css">
        <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">

    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
        body{ font: 10px sans-serif; }
        .login-form {
        width: 50px;
        margin: 200px auto;
        display: inline;
        text-align: center;
        padding-left: 250px;
        padding-right: 250px;


    }
    .login-form form {
        margin-bottom: 50px;
        padding-left: 250px;
        padding-right: 250px;
        padding-left: 55px;
        padding-right: 550px;
        

    }
    .form-group {
      padding-top: 20px;
    }
    #customers {
        font-family: Arial, Helvetica, sans-serif;
  font-size: 10px;
  width: 100%;
  border-radius: 15px
} 


#customers td, #customers th {
    border: 0.5px solid black;
  border-radius: 15px;

}


#customers tr:hover {background-color: rgba(255, 255, 255, 0);}

#customers th {
  padding-top: 15px;
  padding-bottom: 15px;
  text-align: center;
  background-color: #e4e4e400;
        color: rgb(7, 5, 5);
        border-radius: 25px;

}
.autotext {
    display: inline;

    font-size: 21px;
    padding: 140px;
}

. {

}

.utilisa a {
  padding: 10px 20px !important;
  padding-top: 25px;
  color: #4b8ef1 !important;
  text-transform: capitalize;
  font-size: 15px;
  background-color: #fff;
  border-radius: 23px;
  font-weight: 500 !important;
  letter-spacing: 0.3px !important;
}



.main-banner .left-content .utilisa {
    padding-top: 10px;
    text-align: center;
}

.main-banner .left-content .utilisa a {
  background-color: #4b8ef1;
  color: #fff !important;
}

.alert-success {
    color: #0f5132;
    background-color: #d1e7dd;
    border-color: #badbcc;
    max-width:750px;
    padding-left: 550px;
    padding-right: 55px;

}
.alert {
    position: relative;
    padding-left: 55px;
    padding-right: 55px;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
    </style>
  </head>

<body>
    

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a class="logo">
              <img src="assets/images/logobg.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Acceuil</a></li>
              
              <li class="scrill-to-section"><a href="nextcloud/popup.html">Mon Espace</a></li>

              <li class="scroll-to-section"><a href="account.php">Mon Compte</a></li>
              
              <li><div class="gradient-button"><a href="logout.php"><i class="fa fa-sign-in-alt"></i> Déconnexion</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>



  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

  
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
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
<form action="login_useradmin.php" method="post">
<h2 class="text-center">Connexion a un utilisateur</h2>

<div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Nom D'utilisateur" required="required" autocomplete="off">
</div>
   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Login">
    </div>
    
</form>

</div>

<div class="login-form">

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
         <?php
    if(isset($_GET['reg_err']))
    {
        $err =  htmlspecialchars($_GET['reg_err']);

        switch($err)
        {
            case 'success':
                ?>
                <div class="alert alert-success">
                    <strong>Succès</strong> inscription réussie !
            </div>
            <?php
            break;

            case 'password':
                ?> 
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe différent
            </div>
            <?php
            break;
            case 'email':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email non valide 
            </div>
            <?php 
             break;
             case 'name_length':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> Nom et prenom trop long
             </div>
             <?php
             break;
             case 'already'
             ?>
             <div class="alert alert-danger">
             <strong>Erreur</strong> Compte deja existant
             </div>
             <?php 
            
        }
    }
    ?>

<form action="inscription_traitement.php" method="post" >
  
<h2 class="text-center">Ajouter des utilisateur</h2>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Nom d'utilisateur" required="required" autocomplete="off">
</div>
<div class="form-group">

    <input type="email" name="email" class="form-control" placeholder="Address email" required="required" autocomplete="off">
</div>
<div class="form-group">

    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
</div>

<div class="form-group"> 

    <input type="password" name="password_retype" class="form-control" placeholder="Retapper le mot de passe pour comfirmé" required="required" autocomplete="off">
</div>
<div class="form-group"> 



<select name="bdd_test" class="form-control">
    <option value="">Choisir entre Administrateur et utilisateur</option>
    <option value="administrateur">Administrateur</option>
    <option value="utilisateur">Utilisateur</option>
 
</select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
</div>
            
        </form>
        
    </div>




      </div>
    </div>
  </div>

  
  



    

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
     
    
</body>
</html>

