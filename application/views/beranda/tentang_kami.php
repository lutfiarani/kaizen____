<style>
/* Button di bagian bawah halaman */
    .feedback {
        background-color : #31B0D5;
        color: white;
        padding: 10px 20px;
        border-radius: 4px;
        border-color: #46b8da;
    }

    #mybutton {
        position: fixed;
        bottom: -4px;
        right: 10px;
    }

</style>
<style>
   h1 {
        font-weight: bold;
   }

   .mobile-display{display:none}
   .desktop-display{display:block}
  @media screen 
  and (max-device-width: 900px) 
  and (min-device-width: 360px) 
  { 
      
<<<<<<< HEAD
    .mobile-display{display:block}
    .desktop-display{display:none}
  }
</style>


<div class="desktop-display section">
  <section class="news_section layout_padding img " style="background-repeat-y: no-repeat;">
  <br>
      <div class="containers" style="margin-top: 10vh; padding-top:50px">
        <div class="row">
          <!-- <div class="col-md-3"> -->
          <div class="col-md-4">
            <div class="box">
=======
      <div class="row">
        <!-- <div class="col-md-3"> -->
          <div class="box">
            
            <div class="detail-box" style="margin-top: 115px; padding:50px">
              <h2>
                <b>Tentang Kami</b>
              </h2>
>>>>>>> 85ff62948d5c1d6a38207973e565d04b4bc219df
              
              <div class="detail-box" style="margin-top: 115px; padding:10px">
                <h2>
                  <b>Tentang Kami</b>
                </h2>
                
                  <p style="font-size: 20px;">
                      Bergerak bersama dengan segala strategi
                      <br> demi terbentuknya budaya Kaizen
                  </p>
                
              
              </div>
            </div>
          </div>
<<<<<<< HEAD
          <div class="col-md-8">
            <div class="card-deck">
            
                  <?php
                      for($i=0; $i<count($tentang_kami); $i++){
                          $potongan = substr($tentang_kami[$i]['IMG_DESC'], 0, 50);
                          echo '<div class="card">
                          <img class="card-img-top" src="';
                          echo base_url();
                          echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                            <p class="card-text">'.$potongan.'...</p>
                          </div>
                          <div class="card-footer">
                          <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                     Selengkapnya +
                                   </button>
                          </div>
                        </div>';
                        
                      }
=======
        <!-- </div> -->
        <?php
            for($i=0; $i<count($tentang_kami); $i++){
                $potongan = substr($tentang_kami[$i]['IMG_DESC'], 0, 25);
                echo '<div class="col-md-2 border-info" style="border-color: #ff9494 !important ; background:white; padding: 5px; ">
                <div class="box" style="margin-top:0px; border:1px solid; width=370px; margin-top: 115px;">
                  <div class="img-box">
                    <img src="';
                    echo base_url();
                    echo 'template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" alt="" width="183" 
                    height="250">
                  </div>
>>>>>>> 85ff62948d5c1d6a38207973e565d04b4bc219df
                  
                  ?>
            </div>
        </div>
      <!-- </div> -->
    </div>
  </section>
</div>

<div class="mobile-display section">
  <section class="news_section layout_padding " style="background-repeat-y: no-repeat;">
      <div class="containers" style="padding:10px">
        <div class="row">
          <!-- <div class="col-md-3"> -->
              <div class="detail-box" style="margin-top: 50px; padding:10px">
                <h2>
                  <b>Tentang Kami</b>
                </h2>
                <p style="font-size: 20px;">
                    Bergerak bersama dengan segala strategi
                    <br> demi terbentuknya budaya Kaizen
                </p>
              </div>
          <div class="col-md-8">
            <div class="card-deck">
            
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height : 85%">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                            <?php 
                                    $i=0;
                                    $potongan = substr($tentang_kami[$i]['IMG_DESC'], 0, 50);
                                    echo ' <div class="card">
                                        <img src="';
                                        echo base_url();
                                        echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                            <p class="card-text">'.$potongan.'...</p>
                                            <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                                Selengkapnya +
                                                </button>
                                        </div>
                                    </div>';
                                ?>
                                <?php 
                                    $i=1;
                                    $potongan = substr($tentang_kami[$i]['IMG_DESC'],0, 50);
                                    echo ' <div class="card d-none d-md-block">
                                        <img src="';
                                        echo base_url();
                                        echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                            <p class="card-text">'.$potongan.'...</p>
                                            <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                                Selengkapnya +
                                                </button>
                                        </div>
                                    </div>';
                                ?>
                                <?php 
                                        $i=2;
                                        $potongan = substr($tentang_kami[$i]['IMG_DESC'], 0, 50);
                                        echo ' <div class="card d-none d-md-block">
                                            <img src="';
                                            echo base_url();
                                            echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                                <p class="card-text">'.$potongan.'...</p>
                                                <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                                    Selengkapnya +
                                                    </button>
                                            </div>
                                        </div>';
                                    ?>
                            </div>
                        </div>
                        <!-- </div> -->
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                            <?php 
                                    $i=1;
                                    $potongan = substr($tentang_kami[$i]['IMG_DESC'], 2, 50);
                                    echo ' <div class="card">
                                        <img src="';
                                        echo base_url();
                                        echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                            <p class="card-text">'.$potongan.'...</p>
                                            <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                                Selengkapnya +
                                                </button>
                                        </div>
                                    </div>';
                                ?>
                                <?php 
                                    $i=2;
                                    $potongan = substr($tentang_kami[$i]['IMG_DESC'], 2, 50);
                                    echo ' <div class="card d-none d-md-block">
                                        <img src="';
                                        echo base_url();
                                        echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                            <p class="card-text">'.$potongan.'...</p>
                                            <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                                Selengkapnya +
                                                </button>
                                        </div>
                                    </div>';
                                ?>
                                <?php 
                                    $i=0;
                                    $potongan = substr($tentang_kami[$i]['IMG_DESC'], 2, 50);
                                    echo ' <div class="card d-none d-md-block">
                                        <img src="';
                                        echo base_url();
                                        echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                            <p class="card-text">'.$potongan.'...</p>
                                            <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                                Selengkapnya +
                                                </button>
                                        </div>
                                    </div>';
                                ?>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                            <?php 
                                $i=2;
                                $potongan = substr($tentang_kami[$i]['IMG_DESC'], 2, 50);
                                echo ' <div class="card">
                                    <img src="';
                                    echo base_url();
                                    echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                        <p class="card-text">'.$potongan.'...</p>
                                        <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                            Selengkapnya +
                                            </button>
                                    </div>
                                </div>';
                            ?>
                            <?php 
                                $i=0;
                                $potongan = substr($tentang_kami[$i]['IMG_DESC'], 2, 50);
                                echo ' <div class="card d-none d-md-block">
                                    <img src="';
                                    echo base_url();
                                    echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                        <p class="card-text">'.$potongan.'...</p>
                                        <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                            Selengkapnya +
                                            </button>
                                    </div>
                                </div>';
                            ?>
                            <?php 
                                $i=1;
                                $potongan = substr($tentang_kami[$i]['IMG_DESC'], 2, 50);
                                echo ' <div class="card d-none d-md-block">
                                    <img src="';
                                    echo base_url();
                                    echo '/template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b></h5>
                                        <p class="card-text">'.$potongan.'...</p>
                                        <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-img_title="'.$tentang_kami[$i]['IMG_TITLE'].'" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                            Selengkapnya +
                                            </button>
                                    </div>
                                </div>';
                            ?>
                        </div>
                    </div>
                <!-- </div> -->
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>


<!-- Modal -->
<div class="modal fade" id="kami1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><span id="title"></span></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <section class="news_section layout_padding img" style="background-repeat-y: no-repeat;">
            <div class="container">
              
              <div class="row">
                <div class="col-md-4 border-info" style="border-color: #ff9494 !important; background:white; padding: 5px; ">
                  <div class="box" style="margin-top:0px; border:1px solid">
                    <div class="img-box">
                        <span id='gambar'>
                        </span>
                    </div>
                    
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="box">
                    <div class="detail-box" style="margin-top: 115px;">
                      <h2>
                        <b><span id="title2"></span></b>
                      </h2>
                      <h3>
                        <p>
                          <span id="deskripsi"></span>
                        </p>
                      </h3>
                    
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- <script type="text/javascript" src="<?php echo base_url();?>template/fullpage/fullpage.min.js"></script>
        <script type="text/javascript">
            var myFullpage = new fullpage('#fullpage', {
                });
        </script> -->

        <!-- <div id='toTop'><img src="<?php echo base_url() ?>assets/scroll-up2.png" width="50px"></div>
    <div id='tulis'><img src="<?php echo base_url() ?>template/images/icon-tulis-ide.png" width="90px"></div> -->
    <!-- <div id="arrow">
        <a class="previous">prev</a>
        <a class="next">next</a>
    </div> -->
<script>
  $(document).on('click','#tentangKami1',function(){
      var id = $(this).attr("data-id_img");
      var title = $(this).attr("data-img_title");
      var alamat;
      if(title=="Kaizen Story"){
          alamat = "<?php echo base_url();?>C_kaizen/kaizen_story";  
      }else if(title=="Kegiatan"){
          alamat = "<?php echo base_url();?>C_kaizen/aktivitas_kaizen/";
      }else{
          alamat = "<?php echo base_url();?>C_kaizen/tentang_detail/"+id;
      }
      
      // location.href = alamat;
      window.open(alamat, "_blank");
    // alert(id);
  }); 
</script>
<!-- <script>
    $(document).ready(function () {    
       $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#toTop').fadeIn();
                $('#tulis').fadeIn();
                // $('#previous').fadeOut();
            } else {
                $('#toTop').fadeOut();
                $('#tulis').fadeOut();
                $('#previous').fadeOut();
            }
        });

        $("#toTop").click(function () {
             $("html, body").animate({scrollTop: 0}, 1000);
        });

        $("#tulis").click(function () {
            var alamat = "<?php echo base_url();?>C_kaizen/isi_ide";
            location.href = alamat;
        });
        
        

        // scroll to isi Ide
        $('.click').click(function(e){
        e.preventDefault();
        scrollToElement( $(this).attr('href'), 1000 );
        });

        var scrollToElement = function(el, ms){
            var speed = (ms) ? ms : 600;
            $('html,body').animate({
                scrollTop: $(el).offset().top
            }, speed);
        }
        // akhir scroll to isi Ide


        $(function(){
        
        var pagePositon = 0,
            sectionsSeclector = 'section',
            $scrollItems = $(sectionsSeclector),
            offsetTolorence = 30,
            pageMaxPosition = $scrollItems.length - 1;
        
        //Map the sections:
        $scrollItems.each(function(index,ele) { $(ele).attr("debog",index).data("pos",index); });

        // Bind to scroll
        $(window).bind('scroll',upPos);
        
        //Move on click:
        $('#arrow a').click(function(e){
            if ($(this).hasClass('next') && pagePositon+1 <= pageMaxPosition) {
                pagePositon++;
                $('html, body').stop().animate({ 
                        scrollTop: $scrollItems.eq(pagePositon).offset().top
                }, 300);
            }
            if ($(this).hasClass('previous') && pagePositon-1 >= 0) {
                pagePositon--;
                $('html, body').stop().animate({ 
                        scrollTop: $scrollItems.eq(pagePositon).offset().top
                    }, 300);
                return false;
            }
        });
        
        //Update position func:
        function upPos(){
            var fromTop = $(this).scrollTop();
            var $cur = null;
            $scrollItems.each(function(index,ele){
                if ($(ele).offset().top < fromTop + offsetTolorence) $cur = $(ele);
            });
            if ($cur != null && pagePositon != $cur.data('pos')) {
                pagePositon = $cur.data('pos');
            }                   
        }
        
    });
})

</script> -->