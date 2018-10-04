<?php
  include_once 'includes/connect.php';
  include_once 'header.php';
 ?>
 <section class="main-container">
   <div class="main-wrapper-signup">
     <h2>Registracija</h2>
     <form class="signup-form" action="includes/signup.inc.php" method="post">
       Vartotojas: <input type="text" name="user_name"/><br/>
       Slaptažodis: <input type="password" name="user_pass"/><br/>
       El. paštas: <input type="email" name="user_email">><br/>
       <button type="submit" name="submit">Sukurti</button>
     </form>

   </div>

 </section>
 <?php
  include_once 'footer.php';
  ?>
