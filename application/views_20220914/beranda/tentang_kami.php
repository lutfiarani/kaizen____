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
</style>


<!-- <div id="mybutton">
        <button class="feedback">Feedback</button>
    </div> -->
  <section class="news_section layout_padding img section" style="background-repeat-y: no-repeat;">
      <div class="containers" style="margin-top: 115px; padding:50px">
        
        <div class="row">
          <!-- <div class="col-md-3"> -->
          <div class="col-md-4">
            <div class="box">
              
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
                          <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                                     Selengkapnya +
                                   </button>
                          </div>
                        </div>';
                        //   echo '<div class="col-md-2 border-info" style="border-color: #ff9494 !important ; background:white; padding: 5px; ">
                        //   <div class="box" style="margin-top:0px; border:1px solid;">
                        //     <div class="img-box">
                        //       <img src="';
                        //       echo base_url();
                        //       echo 'template/images/welcoming_page/'.$tentang_kami[$i]['IMG'].'" alt="" width="183" 
                        //       height="250">
                        //     </div>
                            
                        //     <div class="detail-box" style="padding: 15px;">
                        //       <h5><b>'.$tentang_kami[$i]['IMG_TITLE'].'</b>
                        //       </h5>
                        //       <p>
                        //         '.$potongan.'...
                        //       </p>
                        //       <div>
                                
                        //         <button class="btn btn-primary" style="margin-top: 30px;" id="tentangKami1" data-id_img="'.$tentang_kami[$i]['IMG_ID'].'">
                        //           Selengkapnya +
                        //         </button>
                        //       </div>
                        //     </div>
                        //   </div>
                        // </div>';

                      }
                  
                  ?>
            </div>
        </div>
      <!-- </div> -->
    </div>
  </section>


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

        <div id='toTop'><img src="<?php echo base_url() ?>assets/scroll-up2.png" width="50px"></div>
    <div id='tulis'><img src="<?php echo base_url() ?>template/images/icon-tulis-ide.png" width="90px"></div>
    <!-- <div id="arrow">
        <a class="previous">prev</a>
        <a class="next">next</a>
    </div> -->
<script>
  $(document).on('click','#tentangKami1',function(){
      var id = $(this).attr("data-id_img")
      var alamat = "<?php echo base_url();?>C_kaizen/tentang_detail/"+id;
      // location.href = alamat;
      window.open(alamat, "_blank");
    // alert(id);
  }); 
</script>
<script>
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

</script>