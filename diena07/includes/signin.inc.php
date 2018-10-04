<?php
  session_start();
    include_once 'connect.php';
    $uid = mysqli_real_escape_string($conn, $_POST['user_name']);
    $pwd = mysqli_real_escape_string($conn, $_POST['user_pass']);

    // error handlers
    // patikriname ar yra tusciu laukeliu
    if (empty($uid) || empty ($pwd)) {
      header("Location: ../signin.php?login=empty");
      exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name = '$uid'";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        if ($result_check < 1) {
          header("Location: ../signin.php?login=error");
          exit();
        } else {
          if ($row = mysqli_fetch_assoc($result)) {
            // dehashing password
            $hashedPwdCheck = password_verify($pwd, $row['user_pass']);
            if ($hashedPwdCheck == false) {
              header("Location: ../signin.php?login=error");
              exit();
            } elseif ($hashedPwdCheck == true) {
              // login vartotoja i svetaine
              $_SESSION['user_id'] = $row['user_id'];
              $_SESSION['user_name'] = $row['user_name'];
              $_SESSION['user_level'] = $row['user_level'];
              header("Location: ../index.php?login=success");
              exit();

            }
          }
        }
      }




 ?>
