(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

// floating action button
  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });
// modal
  var slides = document.getElementsByClassName("box1");
  $(".myImg").click(function(){
    $("#myModal").css({"display":"block"});


    var currentImage = $(this).prop("id");
    var currentInt = parseInt(currentImage[8])
    $("#imageNumber").val(currentInt);
    changeImage(currentInt);
  });

$("#forward").click(function(){
  var number = Number($("#imageNumber").val());
  number++;
  if (number>slides.length) {
    $("#forward").css({"display":"none"});
  } else {
    $("#imageNumber").val(number);
      changeImage(number);
      
  }
});

$("#back").click(function(){
  var number = Number($("#imageNumber").val());
  number--;
  if (number<1) {
    $("#back").css({"display":"none"});
  } else{
    $("#imageNumber").val(number);
      changeImage(number);
  }
});

$(".close1").click(function(){
  $("#myModal").css({"display":"none"});

  $(".box2").empty();
  $("#forward").css({"display":"block"});
  $("#back").css({"display":"block"});
});

// close image by click
// $("#myModal").click(function(){
//   $("#myModal").css({"display":"none"});
// });

// close image by click
// $("#myModal").click(function(){
//   $("#myModal").css({"display":"none"});
// });

    // $(".myImg").click(function(){
    //   $("#myModal").css({"display":"block"});
    //   $("#imageNumber").val(1);
    //   changeImage(1);
    // });

  // $("#forward").click(function(){
  //   var number = Number($("#imageNumber").val());
  //   number++;
  //   if (number>6) {
  //     $("#forward").css({"display":"none"});
  //   } else {
  //     $("#imageNumber").val(number);
  //       changeImage(number);
  //   }
  // });

  // $("#back").click(function(){
  //   var number = Number($("#imageNumber").val());
  //   number--;
  //   if (number<1) {
  //     $("#back").css({"display":"none"});
  //   } else{
  //     $("#imageNumber").val(number);
  //       changeImage(number);
  //   }
  // });

  // function changeImage(imageNumber) {
  //   $(".box2").empty();
  //   var img = $("<img />");
  //   img.prop("src", "images/sistemos" + imageNumber + ".jpg");
  //   $(".box2").append(img);
  // };
  // close image by click
  // $("#myModal").click(function(){
  //   $("#myModal").css({"display":"none"});
  // });

  // $(".close").click(function(){
  //   $("#myModal").css({"display":"none"});
  // });

  $(".orderButton").click(function(){
    $("#modal1").css({"display":"block"});
    $("#formContent").prop("src", $(this).prop("src"));
    // $("#caption").html($(this).prop("alt"));
  });

  // close image by click
  $(".close").click(function(){
    $("#modal1").css({"display":"none"});
  });