
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/owl-carousel/owl.carousel.min.css" />
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/owl-carousel/owl.theme.default.min.css" /> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/owl-carousel/carousel-custom.css" />
  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/owl-carousel/owl.theme.default.min.css" /> -->
  <!-- <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous"> -->
 
 
  <!-- TESTIMONIALS -->
  <!-- <div class="section" id="section4"> -->
    
    <section class="testimonials section">
      <div class="container"  >
        <div class="row">
          <div class="col-sm-12">
            <div class="container-fluid px-2 px-sm-4 my-4 text-center">
              <h2>Pemberian Hadiah</h2>
            </div>
            <div id="customers-testimonials" class="owl-carousel slides-parent ">

              <?php 
                $i = 1;
                foreach ($pemberian_hadiah as $pemberian) {
                  # code...
                  
                  echo '
                  <div class="item">
                    <div class="shadow-lg p-4  rounded">
                      <img class="thumbnail d-block img-responsive"
                       src="'.base_url().'template/images/welcoming_page/'.$pemberian->GAMBAR.'" alt="'.$pemberian->GAMBAR.'"
                       data-img="'.base_url().'template/images/welcoming_page/'.$pemberian->GAMBAR.'"
                       data-id="'.$i.'"
                       data-title="'.$pemberian->GAMBAR.'"
                       >
                    </div>             
                  </div>
                  ';
                  $i++;
                }
              ?>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="testimonials section">
        <div class="container"  >
          <div class="row">
            <div class="col-sm-12">
              <div class="container-fluid px-2 px-sm-4 my-4 text-center">
                <h2>Hadiah Kaizen</h2>
              </div>
              <div id="hadiah-testimonials" class="owl-carousel">

                <?php 
                  foreach ($jenis_hadiah as $jenis) {
                    # code...
                    echo '
                    <div class="item">
                      <div class="shadow-lg p-4  rounded">
                        <img  src="'.base_url().'template/images/welcoming_page/'.$jenis->GAMBAR.'" alt="">
                      </div>             
                    </div>
                    ';
                  }
                ?>
    
          
              </div>
            </div>
          </div>


        </div>
    </section>

    <!-- Modal Carousel -->
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
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
    // window.addEventListener("touchstart", func, {passive: true} );
      $(document).ready(function($) {
          // "use strict";
          //  TESTIMONIALS CAROUSEL HOOK
          $('#customers-testimonials').owlCarousel({
              loop: true,
              nav: true,
              center: true,
              // items: 7,
              margin: 0,
              autoHeight:true,
              autoplay: true,
              dots:false,
              autoplayTimeout: 5000,
              smartSpeed: 450,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 2
                },
                1000: {
                  items: 3
                }
              }
          });


          $('#hadiah-testimonials').owlCarousel({
              loop: true,
              center: true,
              // items: 7,
              margin: 0,
              autoHeight:true,
              autoplay: true,
              dots:false,
              autoplayTimeout: 5000,
              smartSpeed: 450,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 2
                },
                1000: {
                  items: 3
                }
              }
          });


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
