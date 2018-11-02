<?php
 include_once 'header.php';
?>
  <div class="container">
    <div class="section">

        <!-- Images Section -->
      <div class="row">
        <div class="col s12 center">
          <h3 class="text-black" class="header center teal-text text-lighten-2">Virtuvės baldai</h3>
            <p class="text-black">Siekdami patenkinti Jūsų  poreikius pagaminsime tiek standartinių, tiek nestandartinių virtuvės baldus, kurie bus derinami su Jūsų pasirinkta įmontuojama buitine technika. Maloniai nustebinsime praktiškomis detalėmis bei pritaikytais dekoratyviais elementais, padėsiančiais pabrėžti Jūsų virtuvės išskirtinumą. Su patogiais bei praktiškais virtuvės baldais Jūsų virtuvė taps komforto zona Jums, artimui ir svečiui.</p>
        </div>
      </div>
      <div class="row" >
        <div class="col s12 m6 l4">
          <div  class="icon-block">
            <div class="box1">
              <img id="virtuves1" class="myImg" src="images\virtuve1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="virtuves2" class="myImg" src="images/virtuve2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="virtuves3" class="myImg" src="images/virtuve3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4" class="eile">
          <div  class="icon-block">
            <div class="box1">
              <img id="virtuves4" class="myImg" src="images/virtuve4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="virtuves5" class="myImg" src="images/virtuve5.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="virtuves6" class="myImg" src="images/virtuve6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal Content (The Image)-->
        <!-- The Close Button -->
        <span class="close1">&times;</span>
        <input type="text" id="imageNumber" value="" hidden>
        <!-- Modal Caption (Image Text) -->
        <!-- <div id="caption"></div>-->
        <a class="prev" id="back" >&#10094;</a>
        <div class="boxVirtuve">
        </div>
        <a class="next" id="forward" >&#10095;</a>
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
    <div class="section no-pad-bot">
      <div class="container">
      </div>
    </div>
    <div class="parallax"><img src="images/sistemos.jpg" alt="Unsplashed background img 3"></div>
  </div>
  <?php
      include_once 'footer.php';
    ?>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
  // virtuve.php change image
  function changeImage(imageNumber) {
    $(".boxVirtuve").empty();
    var img = $("<img />");
    img.prop("src", "images/virtuve" + imageNumber + ".jpg");
    $(".boxVirtuve").append(img);
  };

  </script>
  </body>
</html>
