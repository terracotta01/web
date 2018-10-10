<?php
 include_once 'header.php';
?>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3 class="text-black" class="header center teal-text text-lighten-2">Svetainės baldai</h3>
            <p class="text-black">Gaminant svetainės baldus mūsų naudojamos technologijos leidžia patenkinti net pačių išrankiausių klientų poreikius. Baldų projektavime skiriamas itin didelis dėmesys net menkiausioms detalėms. Gaminame įvairius, tinkamiausius Jūsų interjerui baldus. Visi svetainės baldai patogūs, funkcionalūs ir dailūs.</p>
        </div>
      </div>
      <div class="row" >
        <div class="col s12 m6 l4">
          <div  class="icon-block">
            <div class="box1">
              <img id="svetaine1" class="myImg" src="images\svetaine1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="svetaine2" class="myImg" src="images\svetaine2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4" class="eile">
          <div  class="icon-block">
            <div class="box1">
              <img id="svetaine3" class="myImg" src="images/svetaine3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="svetaine4" class="myImg" src="images/svetaine4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="svetaine5" class="myImg" src="images/svetaine5.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="icon-block">
            <div class="box1">
              <img id="svetaine6" class="myImg" src="images/svetaine6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div id="myModal" class="modal">
        <!-- Modal Content (The Image)-->
        <!-- The Close Button -->
        <span class="close1">&times;</span>
        <input type="text" id="imageNumber" value="" hidden>
        <!-- Modal Caption (Image Text) -->
        <!-- <div id="caption"></div>-->
        <a class="prev" id="back" >&#10094;</a>
        <div class="boxSvetaine">
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
  // svetaine.php change image
  function changeImage(imageNumber) {
    $(".boxSvetaine").empty();
    var img = $("<img />");
    img.prop("src", "images/svetaine" + imageNumber + ".jpg");
    $(".boxSvetaine").append(img);
  };

  </script>
  </body>
</html>
