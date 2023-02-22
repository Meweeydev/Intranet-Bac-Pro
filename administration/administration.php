<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 120)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header("location: ../login.php");
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


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

    <title>Acceuil - Intranet BP SN</title>
    <link rel="shortcut icon" href="../assets/images/logobg.png" type="image/vnd.microsoft.icon">

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

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
              <img src="../assets/images/logobg.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Acceuil</a></li>
              
              <li class="scrill-to-section"><a href="../nextcloud/popup.html">Mon Espace</a></li>

              <li class="scroll-to-section"><a href="../account.php">Mon Compte</a></li>
              
              <li><div class="gradient-button"><a href="../logout.php"><i class="fa fa-sign-in-alt"></i> Déconnexion</a></div></li> 
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
  <!-- ***** Header Area End ***** -->
  
  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Mon Compte</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">

            <div class="centeredText">
                <span>Bonjour, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="../reset-password.php" class="btn">Réinitialiser mot de passe</a></div>
                <div class="one_half last"><a href="../logout.php"  class="btn">Déconnexion</a></div>
            </div>
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                 
                  
 
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
<label>Nom D'utilisateur</label>

    <input type="text" name="username" class="form-control" placeholder="Nom d'utilisateur" required="required" autocomplete="off">
</div>
<div class="form-group">
<label>Address Email</label>

<input type="email" name="email" class="form-control" placeholder="Address email" required="required" autocomplete="off">
</div>
<div class="form-group">
<label>Mot de passe</label>

<input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
</div>

<div class="form-group"> 
<label>Vérifier le Mot de passe</label>

<input type="password" name="password_retype" class="form-control" placeholder="Retapper le mot de passe pour comfirmé" required="required" autocomplete="off">
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block">Inscription</button>
</div>
    
</form>

</div>


             
                  <div class="col-lg-12">
                  <div class="white-button first-button scroll-to-section">
                    </div>
                  
                  </div>
              
                </div>
              </div>
              
            </div>
            
            <div class="col-lg-6">
              
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
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
<form action="../login_useradmin.php" method="post">
<h2 class="text-center">Connexion a un utilisateur</h2>

<div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Nom D'utilisateur" required="required" autocomplete="off">
</div>
   
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Login">
    </div>
    
</form>

</div>
                
              </div>
              
            </div>
            
          </div>
         
        </div>
      </div>
      
    </div>
   
  </div>

  
  <footer id="newsletter">
    
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Nous Contacter :</h4>
            <p>Centre Scolaire Notre-Dame Ozanam</p>
            <p><a href="#">45 Rue de l'Héritan, 71000 Mâcon</a></p>
            <p><a href="#">bacprosn@gmail.com</a></p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 BACPRO SN KEVIN, MAXENCE 
          <br>Design: <a href="https://notre-dame-ozanam.fr/lycee/nos-formations/" target="_blank" title="css templates">BAC PRO SN</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>



  <!-- Scripts -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/animation.js"></script>
  <script src="../assets/js/imagesloaded.js"></script>
  <script src="../assets/js/popup.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>