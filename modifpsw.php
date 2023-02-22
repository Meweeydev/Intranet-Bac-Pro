    <?php
    $servername = "localhost";
    $username = "root";
    $dbname = "id18630031_intranet";
    
      $conn = new mysqli($servername, $username, '', $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    /////////////
    
    
    
   
    $username2 = htmlspecialchars($_POST['username']);
   
    $new_password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);


   
    if($new_password === $password_retype)
    {
        $new_password = hash('sha256', $new_password);
    
    $sql = "UPDATE utilisateur SET password='".$new_password."' WHERE username='$username2' ";
    
    if ($conn->query($sql) === TRUE) {
      echo "Error updating record: " . $conn->error;
      header('Location:administ.php?reg_err=password');

    } else {
      echo "Error updating record: " . $conn->error;
    }

    }else 
      echo "Error updating record: " . $conn->error;

    
    ?>