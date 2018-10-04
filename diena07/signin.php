<?php
include 'header.php';

echo '<form method="post" action="includes/signin.inc.php">
      Username: <input type="text" name="user_name" />
      Password: <input type="password" name="user_pass">
      <input type="submit" value="Sign in" />
      </form>';
include 'footer.php';

?>
