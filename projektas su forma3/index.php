<?php
    require __DIR__ . '/app/src/app.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="keywords" content="baldai, baldų projektavimas ir gamyba, korpusinių baldų gamyba, baldų pristatymas ir montavimas, virtuvės baldų gamyba, vonios baldų gamyba, prieškambario baldų gamyba, vaikų kambario baldų gamyba, jaunuolio kambario baldų gamyba, miegamojo baldų gamyba, spintos su slenkančiomis durimis, sekcijos, sekcijų fasadai iš ąžuolo,  sekcijų fasadai iš medžio drožlių plokštės, sekcijų fasadai iš medžio drožlių faneruotės, sekcijų fasadai iš stiklo, darbo kambario baldų gamyba, baldai parduotuvėms, prekybinė įranga, lentynos, vitrinos, prekystaliai, baldai barams ir kavinėms, barai, stalai, kėdės, vitrinos, biuro baldų gamyba, mokykliniai baldai, suolai, stalai, bibliotekų, skaityklų baldų gamyba, valgyklų baldų gamyba, baldai vaistinėms, specialūs baldai, specialūs baldai studijoms, specialūs baldai mikroautobusams, briaunų kantavimas plastiku, briaunų kantavimas medžiu, prekyba medžio drožlių plokšte, plokštės pjaustymas, pertvaros iš stiklo, stalviršiai, interjero projektavimas ir įrengimas, baldai šiauliuose, virtuvės baldai, baldai juvelyrinei parduotuvei, optikos parduotuvės baldai, virtuvės įranga, nestandartinių baldų gamyba, standartinių baldų gamyba, baldu gamyba siauliuose, baldai kirpyklai, slenkancios sistemos, spinta stumdomomis durimis, aliuminio remeliai, naturalaus medzio baldai, balintas azuolas, baldai internetu, baldu eksportas, HPL sieneles, ekologiski baldai, aliejuoti baldai, baldai pagal uzsakyma, baldai siauliu rajone, baldu gamyba radviliskis, baldu gamyba seduva, baldu gamyba neringa, uzsakomi baldai, korpusiniai baldai, praktiski baldai, ekonomiski baldai, kokybiski baldai, baldai akcija, azuolo faneruote." />
  <title>Guobos baldai</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo" ><img src="images/logo.png" class="logo" alt="Logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="virtuve.php" >Virtuvės baldai</a></li>
        <li><a href="svetaine.php">Svetainės baldai</a></li>
        <li><a href="sistemos.php">Slankiojančios sistemos</a></li>
        <li><a href="#apieMus">Apie mus</a></li>
        <li><a href="#kontaktai">Kontaktai</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="virtuve.php" >Virtuvės baldai</a></li>
        <li><a href="svetaine.php">Svetainės baldai</a></li>
        <li><a href="sistemos.php">Slankiojančios sistemos</a></li>
        <li><a href="#apieMus">Apie mus</a></li>
        <li><a href="#kontaktai">Kontaktai</a></li>
      </ul>
      <a class="black-text" href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container" >
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
<!-- Mygtuko užsisakyk konteineris -->
        <div class="order_container">
        <div class="row center">
          <h1></h1>
          <h4 class="header col s12 light"><b>Užsisakyk savo svajonių baldus</b></h5>
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
            <h5  class="center" ><a href="virtuve.php" class="black-text">Virtuvės baldai</a></h5>
            <p class="light"> Jūsų virtuvė maža? O gal bendroje erdvėje su svetaine? Virtuvė turi būti ir jauki, ir funkcionali. Pasiūlysime, kaip jūsų virtuvę paversti erdve, kurioje malonu ir gaminti, ir leisti laiką su artimaisiais.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center  black-text"><i class="material-icons">weekend</i></h2>
            <h5 class="center"><a href="svetaine.php" class="black-text">Svetainės baldai</a></h5>
            <p class="light">Jūsų svetainė turėtų būti viena patogiausių vietų namuose. Tai vieta, kur susirenka šeima ir draugai, o tuo pačiu savo vietą turi rasti ir daug daiktų. Todėl svetainėje svarbu ne tik patogiai prisėsti, bet efektyviai išnaudoti erdvę.
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">business</i></h2>
            <h5 class="center"><a href="sistemos.php" class="black-text">Slankiojančios sistemos</a></h5>
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
  <footer class="page-footer teal brown lighten-5 black-text">
    <div  class="container">
      <div  class="row">
        <div class="col l6 s12">
          <h5 class="black-text" id="apieMus">Apie mus</h5>
          <p class="black-text">Guobos baldai – tai nestandartinių baldų projektavimas ir gamyba pagal individualius užsakymus. Mes gaminame: virtuvės, prieškambario, miegamojo, vonios, svetainės, biuro, vaiko kambario baldus, slankiojančias sistemas ir visus kitus nestandartinius baldus.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="black-text">Nuorodos</h5>
          <ul >
            <li ><a class="black-text" href="index.html">Pradžia</a></li>
            <li><a class="black-text" href="virtuve.php">Virtuvės baldai</a></li>
            <li><a class="black-text" href="svetaine.php">Svetainės baldai</a></li>
            <li><a class="black-text" href="sistemos.php">Slankiojančios sistemos</a></li>
          </ul>
        </div>
        <div  class="col l3 s12">
          <h5 class="black-text" id="kontaktai">Kontaktai</h5>
          <ul>
            <!-- turi veikt skambinimas ir el pastas -->
            <li>Laisvės pr. 60, Vilnius</li>
            <li><a class="black-text" href="callto:+37065669099">Tel: +37065669099</a></li>
            <li><a class="black-text" href="http://www.guobosbaldai.lt">www.guobosbaldai.lt</a></li>
            <li><a class="black-text" href="mailto:info@guobosbaldai.lt">info@guobosbaldai.lt</a></li>
          </ul>
          <a class="black-text" href="https://www.facebook.com/Guobos-baldai-246022925538150/" target="_blank">
            <i  class="fa fa-facebook-official" style="font-size:36px"></i>
          </a>
          <a class="black-text" href="https://twitter.com/" target="_blank">
            <i class="fa fa-twitter-square" style="font-size:36px"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-copyright black-text" >
      <div class="container" >
      Made by <a class="black-text">Vaida, Aivaras, Asta</a>
      </div>
    </div>
  </footer>
<!-- FOOTER -->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
