<?php
    require __DIR__ . '/app/src/app.php';
 ?>
 <?php
  include_once 'header.php';
?>

  <div id="index-banner" class="parallax-container" >
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
<!-- Mygtuko užsisakyk konteineris -->
        <div class="order_container">
        <div class="row center">
          <h1></h1>
          <h4 class="header col s12 light"><b>Užsisakyk savo svajonių baldus</b></h4>
        </div>
        <div class="row center">

          <button id="download-button" class="btn-large waves-effect waves-light btn amber darken-4 modal-trigger orderButton"><b>Užsakyti</b></button>
        </div>
      </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="images/kitchen2.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">
    <div class="section">
        <!-- Icon Section -->
      <div class="row">
        <div class="col s12 m4">
          <div  class="icon-block">
            <h2  class="center black-text" ><i class="material-icons" >kitchen</i></h2>
            <h5  class="center hover" ><a href="virtuve.php" class="black-text">Virtuvės baldai</a></h5>
            <p class="light"> Jūsų virtuvė maža? O gal bendroje erdvėje su svetaine? Virtuvė turi būti ir jauki, ir funkcionali. Pasiūlysime, kaip jūsų virtuvę paversti erdve, kurioje malonu ir gaminti, ir leisti laiką su artimaisiais.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center  black-text"><i class="material-icons">weekend</i></h2>
            <h5 class="center hover"><a href="svetaine.php" class="black-text">Svetainės baldai</a></h5>
            <p class="light">Jūsų svetainė turėtų būti viena patogiausių vietų namuose. Tai vieta, kur susirenka šeima ir draugai, o tuo pačiu savo vietą turi rasti ir daug daiktų. Todėl svetainėje svarbu ne tik patogiai prisėsti, bet efektyviai išnaudoti erdvę.
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">business</i></h2>
            <h5 class="center hover"><a href="sistemos.php" class="black-text">Slankiojančios sistemos</a></h5>
            <p class="light">Namuose turi būti patogu, todėl kasdieniai ir rečiau naudojami daiktai turi rasti savo vietą. Padėsime rasti patogų, kokybišką ir tuo pačiu stilingą daiktų laikymo sprendimą.
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="images/svetaine.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send"></i></h3>
          <h4>Kodėl mes?</h4>
          <p class="left-align light"> Mūsų pagrindinis <span>tikslas</span> - išpildyti visus Jūsų norus, <span>sukurti Jums jaukius ir patogius namus.</span></br>
          Baldų gamybai naudojame įvairių gamintojų laminuotas medžių drožlių plokštes (LMDP) ir dažytas arba laminuotas aukšto suslėgimo medžio dulkių plokštes (MDF), aukšto suslėgimo laminatą (HPL). Taip pat baldų gamybai naudojame visų geriausių, patikimiausių gamintojų furnitūrą.</p>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center">
          <table >
            <tr>
              <th>Profesionalus projektavimas</th>
              <th>Nemokamas montavimas</th>
              <th>Kokybiški ir patogūs baldai</th>
              <th>Geriausia kaina</th>
              <th>Nemokamas pristatymas</th>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- fixed action button -->
  <div class="fixed-action-btn susisiekime">
    <button  id="download-button" class="btn-large waves-effect waves-light btn amber darken-4 modal-trigger orderButton" data-target="modal1"><b>Turite klausimų? Susisiekime</b></button>
  </div>
  <!-- iššokanti forma -->
  <?php
      include ('app/views/content.php');
  ?>

  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="images/sistemos.jpg" alt="Unsplashed background img 3"></div>
  </div>
<!-- FOOTER -->
<?php
    include_once 'footer.php';
  ?>
<!-- FOOTER -->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
