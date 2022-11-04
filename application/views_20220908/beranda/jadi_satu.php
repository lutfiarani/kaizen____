
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fullpage/fullpage.css" />
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fullpage/examples.css" /> -->


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
    /* z-index: 999; */
    z-index: -1;
    /* position:relative; */
}

#tulis {
    padding: 5px 30px;
    position: fixed;
    bottom: 0;
    right: 50px;
    display: none;
    /* z-index: 999; */
    z-index: -1;
    /* position:relative; */
}
#arrow {
  position:fixed;
  top:93%;
  background:#da0101;
  color:#ffffff;
  /* z-index: 999; */
  z-index: -1;
    /* position:relative; */
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
  border:10px
}

.card:hover{
    box-shadow: 5px 6px 6px 2px #e9ecef;
    transform: scale(1.1);
}

.slider_section .detail-box{
  background:white
}

/* Overwriting styles for control arrows for slides
	* --------------------------------------- */
	.controlArrow.prev {
		left: 50px;
	}
	.controlArrow.next{
		right: 50px;
	}

	/* Overwriting styles for navigation bullets
	* --------------------------------------- */
	#fp-nav ul li a span, 
	.fp-slidesNav ul li a span{
		background: black;
	}


	/* Bottom menu
	* --------------------------------------- */
	#infoMenu li a {
		color: #fff;
	}

    /* Button di bagian bawah halaman */
    .feedback {
        background-color : #31B0D5;
        color: white;
        padding: 10px 20px;
        border-radius: 4px;
        border-color: #46b8da;
        /* position: fixed;
        
        z-index: 999;
        display: block; */
        /* z-index: -1;
    position:relative; */
    }

    #mybutton {
        position: relative;
        z-index: 999;
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
        <button class="feedback" onClick = "kesana()">Feedback</button>
    </div> -->
    <div id='mybutton' onClick='kesana()'><img src="<?php echo base_url() ?>template/images/icon-tulis-ide.png" width="90px"></div>
<div id="fullpage">


    <!-- <button id="myBtn" title="Go to top">Top</button> -->
    <!-- <div class="section active" id="section0"> -->
    <section class=" slider_section position-relative section active" id="section0" >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators" style="margin-bottom: 100px">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style=" margin-top: 63px">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[0]['IMG'];?>" width="100%" height="auto" alt="First slide">
                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: 30vh">
                        <h5><?php echo $slide[0]['IMG_DESC'];?></h5>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[1]['IMG'];?>" width="100%" height="auto" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: 30vh">
                        <h5><?php echo $slide[1]['IMG_DESC'];?></h5>
                        
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[2]['IMG'];?>" width="100%" height="auto" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: 30vh">
                        <h5><?php echo $slide[2]['IMG_DESC'];?></h5>
                        <!-- <p>hahahahaha</p> -->
                    </div>
                </div>
                <div class="card bg-light mb-3" style="width: 75%;padding-top: 30px; margin: 0 auto; float: none; margin-top: 70vh; border:1px; height: 25%;" align="center">
                
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3"><h1><span class="counter">999</span></h1></div>
                            <div class="col-sm-3"><h1><span class="counter">13950</span></h1></div>
                            <div class="col-sm-3"><h1><span class="counter">6500</span></h1></div>
                            <div class="col-sm-3"><h1><span class="counter">780</span></h1></div>
                            <div class="w-100"></div>
                            <div class="col"><h5>Ide Terkirim Hari Ini</div>
                            <div class="col"><h5>Ide Terkirim 2022</div>
                            <div class="col"><h5>Karyawan Kirim Ide</div>
                            <div class="col"><h5>Ide Implemented</div>    
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    <!-- </div> -->
    </section>
   
    <!-- <div id="section2" class="section">
        Section Kedua
    </div> -->
<!-- </div> -->

        <!-- end slider section -->
 
    <div id='toTop'><img src="<?php echo base_url() ?>assets/scroll-up2.png" width="50px"></div>
    
    <!-- <div id="arrow">
        <a class="previous">prev</a>
        <a class="next">next</a>
    </div> -->
 
    

    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>template/counterup/jquery.counterup.min.js"></script>
    
    <script>
    // $(document).ready(function () {    
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

        // $("#mybutton").click(function () {
        // $(document).on('click', '#mybutton', function(){
            function kesana(){
            var alamat = "<?php echo base_url();?>C_kaizen/isi_ide";
            location.href = alamat;}
        // });
        
        

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
// })

</script>
<script type="text/javascript" src="<?php echo base_url();?>template/fullpage/fullpage.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url();?>template/fullpage/examples.js"></script> -->
    
    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', 
            {
                anchors: ['firstPage', 'secondPage', '3rdPage'],
                // sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', 'red', 'blue', 'green'],
                navigation: true,
                navigationPosition: 'right',
                // navigationTooltips: ['First page', 'Second page', 'Third and last page']
            });
    </script>
