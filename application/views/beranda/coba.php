<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Slideshow</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/owl-carousel/owl.theme.default.min.css" />
  <!-- <link rel="stylesheet" href="/inventory/owlcarousel/assets/owl.theme.default.min.css"> -->
  <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row" id="product-1">
    <div class="col-12">
      <!-- .owl-carousel and .owl-theme are important, .slides-parent is for bootstrap carousel-->
      <div class="slides-parent owl-carousel owl-theme">
        <!-- class="item" can be removed -->
        <div class="item">
          <!-- .thumbnail is for targeting individual owl item -->
          <!-- img.data-id has to be unique in the corresponding .slides-parent -->
          <img class="thumbnail d-block img-responsive"
               data-id="1"
               data-title="Product 1 Image 1"
               data-img="http://via.placeholder.com/400x400/?text=p1x1x400x400"
               src="http://via.placeholder.com/200x200/?text=p1x1x200x200">
        </div>
        <div class="item">
          <img class="thumbnail d-block img-responsive"
               data-id="2"
               data-title="Product 1 Image 2"
               data-img="http://via.placeholder.com/400x400/?text=p1x2x400x400"
               src="http://via.placeholder.com/400x300/?text=p1x2x400x300">
        </div>
        <div class="item">
          <img class="thumbnail d-block img-responsive"
               data-id="3"
               data-title="Product 1 Image 3"
               data-img="http://via.placeholder.com/400x400/?text=p1x3x400x400"
               src="http://via.placeholder.com/200x200/?text=p1x3x200x200">
        </div>
        <div class="item">
          <img class="thumbnail d-block img-responsive"
               data-id="4"
               data-title="Product 1 Image 4"
               data-img="http://via.placeholder.com/400x400/?text=p1x4x400x400"
               src="http://via.placeholder.com/200x200/?text=p1x4x200x200">
        </div>
      </div>
    </div>

  </div> <!-- .row -->

  <div class="row p-3"></div>

  <div class="row" id="product-2">
    <div class="col-12">
      <div class="slides-parent owl-carousel owl-theme">
        <div class="item">
          <img class="thumbnail img-responsive" data-id="1" data-title="Product 2 Image 1"
               data-img="http://via.placeholder.com/400x400/?text=p2x1x400x400"
               src="http://via.placeholder.com/200x200/?text=p2x1x200x200">
        </div>
        <div class="item">
          <img class="thumbnail img-responsive" data-id="2" data-title="Product 2 Image 2"
               data-img="http://via.placeholder.com/400x400/?text=p2x2x400x400"
               src="http://via.placeholder.com/200x200/?text=p2x2x200x200">
        </div>
        <div class="item">
          <img class="thumbnail img-responsive" data-id="3" data-title="Product 2 Image 3"
               data-img="http://via.placeholder.com/400x400/?text=p2x3x400x400"
               src="http://via.placeholder.com/200x200/?text=p2x3x200x200">
        </div>
      </div>
    </div>

  </div> <!-- .row -->
</div> <!-- .container -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleControls" class="carousel slide" data-interval="false">
          <div class="carousel-inner">
            <!--
            <div class="carousel-item active">
              <img class="d-block w-100" src="http://via.placeholder.com/300x250/?text=1x300x250" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://via.placeholder.com/300x250/?text=2x300x250" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://via.placeholder.com/300x250/?text=3x300x250" alt="Third slide">
            </div>
            -->
          </div> <!-- .carousel-inner -->
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> <!-- #carouselExampleControls -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> <!-- #exampleModal .modal carousel -->

<script
  src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
  integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
  crossorigin="anonymous"></script>
<script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
  integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
  crossorigin="anonymous"></script>
  <script src="<?php echo base_url() ?>assets/owl-carousel/owl.carousel.min.js"></script>

<script>
  $(document).ready(function () {
    //$("#product-1").owlCarousel();
    $('.owl-carousel').owlCarousel({
      loop:false,
      margin:10,
      nav:true,
      items:3,
      responsive:{
        0:{
          items:3
        },
        1000:{
          items:5
        }
      }
    })

    /* activate the carousel */
    $("#carouselExampleControls").carousel({interval: false});

    /* change modal title when slide changes */
    $("#carouselExampleControls").on("slid.bs.carousel", function () {
      $(this).find(".modal-title")
        .html($(this)
          .find(".active img")
          .data("title"));
    });

    /* when clicking a thumbnail */
    $(".slides-parent .thumbnail").click(function () {
      var content = $("#carouselExampleControls .carousel-inner");
      var title = $("#exampleModal .modal-title");

      content.empty();
      title.empty();

      // var id = this.id;
      var thisTitle = $(this).data('title');
      var thisImg = $(this).data('img');
      var $allImages = $(this).closest(".slides-parent").find('img');
      $allImages.each(function () {
        var img = $(this).data('img');
        var classDiv = (thisImg === img) ?
          'carousel-item active' : 'carousel-item';
        var $div = $("<div>", {"class": classDiv});
        var $img = $("<img>", {
          "class": "d-block w-100",
          "src": img,
          "data-title": $(this).data('title')
        });
        $div.append($img);
        content.append($div);
      });

      title.html(thisTitle);

      // show the modal
      $("#exampleModal").modal("show");
    });

  });
</script>

</body>
</html>