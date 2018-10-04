<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>PHP 7 diena</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <h1>Mano forumas</h1>
      <div id="wrapper">
        <div id="menu">
          <a class="item" href="index.php">Titulinis</a> -
          <a class="item" href="create_topic.php">Sukurti temą</a> -
          <a class="item" href="create_cat.php">Sukurti kategoriją</a>
          <div id="userbar">
            <?php
              if($_SESSION['user_id']) {
                echo 'Labas, ' . $_SESSION['user_name'] . '!. <a href="includes/signout.inc.php">Atsijungti</a>';
              } else {
                echo '<a href="signin.php">Prisijungti</a> arba <a href="signup.php">Registruotis</a>.';
              }

             ?>
            </div>
        </div>
          <div id="content">
