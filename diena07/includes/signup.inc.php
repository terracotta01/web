<?php
  // patikriname, ar vartotojas pasieke si faila ne tiesiogiai, o paspaudes Sign Up mygtuka
  if (isset($_POST['submit'])) {
    include_once 'connect.php';
    $uid = mysqli_real_escape_string($conn, $_POST['user_name']);
    $pwd = mysqli_real_escape_string($conn, $_POST['user_pass']);
    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    // error handlers
    // patikriname ar yra tusciu laukeliu
    if (empty($uid) || empty($pwd) || empty($email)) {
      header ("Location: ../signup.php?signup=empty");
      exit();
    } else {
      // patikriname ar ivesti teisingi simboliai
      if (!preg_match("/^[a-zA-Z]*$/", $uid)) {
        header ("Location: ../signup.php?signup=invalid");
        exit();
      } else {
        // patikriname ar email galiojantis
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header ("Location: ../signup.php?signup=invalidemail");
          exit ();
        } else {
          // patikriname ar username jau naudojamas
          $sql = "SELECT * FROM users WHERE user_name = '$uid'";
          $result = mysqli_query($conn, $sql);
          $result_check = mysqli_num_rows($result);
          if ($result_check > 0) {
            header ("Location: ../signup.php?signup=usertaken");
            exit ();
          } else {
            // sukuriame hash slaptazodziui
            $hashedPwd = password_hash ($pwd, PASSWORD_DEFAULT);
            // ikeliame vartotoja i //
            $sql = "INSERT INTO users (user_name, user_pass, user_email, user_level) VALUES ('$uid', '$hashedPwd', '$email', '0'); ";
            mysqli_query($conn, $sql);
            header ("Location: ../signin.php");
            exit ();
          }
        }
      }
    }
  } else {
    header ("Location: ../signup.php");
    exit();
  }

 ?>
