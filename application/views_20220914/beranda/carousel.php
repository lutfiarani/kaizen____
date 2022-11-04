
 

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            jQuery(document).ready(function( $ ) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
    <style>

        
    #toTop {
        padding: 5px 3px;
        position: fixed;
        bottom: 0;
        right: 5px;
        display: none;
        z-index: 999;
    }

    #tulis {
        padding: 5px 30px;
        position: fixed;
        bottom: 0;
        right: 50px;
        display: none;
        z-index: 999;
    }
    #arrow {
      position:fixed;
      top:93%;
      background:#da0101;
      color:#ffffff;
      z-index: 999;
    }

    #arrow a{
        display:inline-block;
        padding:10px 20px;
        cursor:pointer;
    }

    #bunder{
      width: auto;
      height: 15em;
      border-radius: 50%;
      background-color: #394ab3;
      border: 40px solid white;
      box-shadow: 0 0 0 5px #394ab3;
      text-align:center;
      line-height:8em;
      /* text-align: center; */
     
    }

    .card-header:first-child{
      border-radius: 30px 30px 0px 0px;
    }

    .card-body{
      border-radius: 0px 0px 30px 30px;
    }

    .card{
      border:0px
    }

    .slider_section .detail-box{
      background:white
    }

    </style>
    <style>
       h1 {
            font-weight: bold;
            }
        </style>

<div id="fullpage">
    <!-- <div class="" > -->
        <section class=" slider_section position-relative section active" id="section0" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                <ol class="carousel-indicators" style="margin-bottom: 100px">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[0]['IMG'];?>" width="1805px" height="773px" alt="First slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 80px">
                            <h5><?php echo $slide[0]['IMG_DESC'];?></h5>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[1]['IMG'];?>" width="1805px" height="773px" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 80px">
                            <h5><?php echo $slide[1]['IMG_DESC'];?></h5>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[2]['IMG'];?>" width="1805px" height="773px" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block" style="margin-bottom: 80px">
                            <h5><?php echo $slide[2]['IMG_DESC'];?></h5>
                            <!-- <p>hahahahaha</p> -->
                        </div>
                    </div>
                    <div class="card bg-light mb-3" style="width: 80rem;margin: 0 auto; float: none; margin-top: 700px;" align="center">
                    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3"><h1><span class="counter">999</span></h1></div>
                                <div class="col-sm-3"><h1><span class="counter">13950</span></h1></div>
                                <div class="col-sm-3"><h1><span class="counter">6500</span></h1></div>
                                <div class="col-sm-3"><h1><span class="counter">780</span></h1></div>
                                <div class="w-100"></div>
                                <div class="col">Ide Terkirim Hari Ini</div>
                                <div class="col">Ide Terkirim 2022</div>
                                <div class="col">Karyawan Kirim Ide</div>
                                <div class="col">Ide Implemented</div>    
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </section>

            <!-- end slider section -->
     

        <!-- <a href="#keIsiIde" class="click">Click this to scroll to element 2!</a><br /> -->
        <!-- <a href="#toTentangKami" class="click"><img src="<?php //echo base_url() ?>assets/scroll.png" width="50px"></a><br /> -->
        <div id='toTop'><img src="<?php echo base_url() ?>assets/scroll-up2.png" width="50px"></div>
        <div id='tulis'><img src="<?php echo base_url() ?>template/images/icon-tulis-ide.png" width="90px"></div>
        <div id="arrow">
            <a class="previous">prev</a>
            <a class="next">next</a>
        </div>
        
        <script type="text/javascript" src="<?php echo base_url();?>template/fullpage/fullpage.js"></script>
        
        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="<?php echo base_url();?>template/counterup/jquery.counterup.min.js"></script>
        <script>
        $(document).ready(function () {
            var firstsec = document.getElementById('section0');
            var secondsec = document.getElementById('section1');
            var lastScrollTop = 0;
            window.onscroll = function(){
            var st = window.pageYOffset || document.documentElement.scrollTop; 
            if (st > lastScrollTop){
                secondsec.scrollIntoView({behavior: "smooth"});
            } else {
                firstsec.scrollIntoView({behavior: "smooth"});
            }
            lastScrollTop = st <= 0 ? 0 : st; 
            } 
        })
        </script>
        <script>
            
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

  </script>
  