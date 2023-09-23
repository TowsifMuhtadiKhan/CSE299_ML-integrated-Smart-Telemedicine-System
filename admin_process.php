

<?php 
  $errors = array();
  $db = mysqli_connect('localhost', 'root', '', 'cse299_project');

  if (isset($_POST['adlogin_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username1']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $query = "SELECT * FROM `admin_panel` WHERE `Username` = '$username' AND `Password` = '$password'";
    $results = mysqli_query($db, $query);
    

  if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (mysqli_num_rows($results) == 1) { 
        header('location:admindoc.php');
    }
    else{
        echo "Invalid Username or Password";
    }
}
  ?>