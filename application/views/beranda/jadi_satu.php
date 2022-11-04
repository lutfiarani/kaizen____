
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fullpage/fullpage.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/coba-carousel.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<style media="all">
    
    
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
       
    }

    #mybutton {
        position: relative;
        z-index: 999;
        bottom: -4px;
        right: 10px;
        
    }

    /* .carousel-img
{
    width: 100%;
    height: 100%;
    object-fit: cover;
} */
    
.inilah {

  background: rgba(142, 139, 141, 0.5);

}

.putihmelati {
  background: rgba(255, 255, 255, 0.5);
}

.mobile-display{display:none}
.desktop-display{display:block}
@media screen 
 and (max-device-width: 900px) 
 and (min-device-width: 360px) 
{ 
    .mobile-display{display:block}
    .desktop-display{display:none}

    .slider_section .carousel-control-prev,
    .slider_section .carousel-control-next {
        /* left: 47.6%; */
        width: 50px;
        height: 50px;
        z-index: 9;
        background-size: 9px;
        background-repeat: no-repeat;
        background-position: center;
        /* opacity: 1; */
        border-radius: 100%;
    }
    .slider_section .carousel-control-prev {
        background-image: url(../images/prev.png);
        background-color: #2e02fe;
        -webkit-transform: translate(-50%, 0);
                transform: translate(-50%, 0);
    }

    .slider_section .carousel-control-next {
        background-image: url(../images/next.png);
        background-color: #2e02fe;
        -webkit-transform: translate(0, -50%);
                transform: translate(0, -50%);
    }

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
<div id='mybutton' onClick='kesana()'><img src="<?php echo base_url() ?>template/images/kaizen 4.png" width="90px"></div>
<div id="fullpage">
    <div class="desktop-display section active">
        <section class=" slider_section" >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="500000" >
            <ol class="carousel-indicators" style="margin-bottom: 100px; visibility: hidden">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- // <?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[0]['IMG'];?> -->
            <div class="carousel-inner" style="  margin-top: 63px; ">
                <div class="carousel-item gambar active">
                    <img class="gambar" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[0]['IMG'];?>"alt="First slide" style="height: 100%; width: 100%; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block opacity-75" >
                        <div id="cobalah">
                            <div class="card text-white inilah " style="margin-top:10vh" >
                                    <h5  style="color: white;"><?php echo $slide[0]['IMG_DESC'];?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item gambar">
                    <img class="gambar" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[1]['IMG'];?>" alt="Second slide" style="height: 100%; width: 100%; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <div id="cobalah">
                            <div class="card text-white  inilah" style="margin-top: 10vh" >
                                <h5 style="color: white;"><?php echo $slide[1]['IMG_DESC'];?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item gambar">
                    <img class="gambar" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[2]['IMG'];?>"  alt="Third slide" style="height: 100%; width: 100%; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <div id="cobalah">
                            <div class="card text-white inilah" style="margin-top: 10vh">
                                <h5 style="color: white;"><?php echo $slide[2]['IMG_DESC'];?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 putihmelati " style="width: 75%;padding-top: 0px; margin: 0 auto; float: none; margin-top: 75vh; border:1px; height: 70%; align:center" >
                
                    <div class="card-body putihmelati">
                        <div class="row">
                            <div class="col-sm-3"><center><h1><span class="counter">999</span></h1></div>
                            <div class="col-sm-3"><center><h1><span class="counter">13950</span></h1></div>
                            <div class="col-sm-3"><center><h1><span class="counter">6500</span></h1></div>
                            <div class="col-sm-3"><center><h1><span class="counter">780</span></h1></div>
                            <div class="w-100"></div>
                            <div class="col"><center><h5>Ide Terkirim Hari Ini</div>
                            <div class="col"><center><h5>Ide Terkirim 2022</div>
                            <div class="col"><center><h5>Karyawan Kirim Ide</div>
                            <div class="col"><center><h5>Ide Implemented</div>    
                        </div>
                        
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</div>
<!-- Section Tampilan Mobile -->
<div class="mobile-display section active">
    <section class=" slider_section position-relative" id="section0" >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000" style="height: auto;" >
            <ol class="carousel-indicators" style="margin-bottom: auto">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style=" margin-top: 0px">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[0]['IMG'];?>" width="100%" height="auto" alt="First slide">
                        <div class="card text-white inilah  mb-3 opacity-50"  >
                            <h5 style="color: white; text-align:center"><?php echo $slide[0]['IMG_DESC'];?></h5>
                        </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[1]['IMG'];?>" width="100%" height="auto" alt="Second slide">
                        <div class="card text-white inilah mb-3 opacity-50" >
                            <h5 style="color: white; text-align:center"><?php echo $slide[1]['IMG_DESC'];?></h5>
                        </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo base_url();?>template/images/welcoming_page/<?php echo $slide[2]['IMG'];?>" width="100%" height="auto" alt="Third slide">
                        <div class="card text-white inilah mb-3 opacity-50">
                            <h5 style="color: white; text-align:center"><?php echo $slide[2]['IMG_DESC'];?></h5>
                        </div>
                </div>
                <div class="card bg-light mb-3" style="width: 90%;padding-top: 0px; margin: 0 auto; float: none; margin-top: 50vh; border:1px; height: 25%; align=center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col"><center><h1><span class="counter">999</span></h1></div>
                            <div class="col"><center><h1><span class="counter">13950</span></h1></div>
                            <div class="w-100"></div>
                            <div class="col"><center>Ide Terkirim Hari Ini</div>
                            <div class="col"><center>Ide Terkirim 2022</div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col"><center><h1><span class="counter">999</span></h1></div>
                            <div class="col"><center><h1><span class="counter">13950</span></h1></div>
                            <div class="w-100"></div>
                            <div class="col"><center>Karyawan Kirim Ide</div>
                            <div class="col"><center>Ide Implemented</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
</div>

 
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="<?php echo base_url();?>template/counterup/jquery.counterup.min.js"></script>
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

    function kesana(){
        var alamat = "<?php echo base_url();?>C_kaizen";
        location.href = alamat;
    }
       
</script>
<script type="text/javascript" src="<?php echo base_url();?>template/fullpage/fullpage.min.js"></script>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', 
        {
            navigation: true,
            navigationPosition: 'right',
            responsiveWidth: 600
            
        });
</script>
