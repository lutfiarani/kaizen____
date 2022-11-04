<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
<style>
    .ratings i {
    font-size: 16px;
    color: red
}

.strike-text {
    color: red;
    text-decoration: line-through
}

.product-image {
    width: 100%
}

.dot {
    height: 7px;
    width: 7px;
    margin-left: 6px;
    margin-right: 6px;
    margin-top: 3px;
    background-color: blue;
    border-radius: 50%;
    display: inline-block
}

.spec-1 {
    color: #938787;
    font-size: 15px
}

h5 {
    font-weight: 400
}

.para {
    font-size: 16px
}

.txt-wrp-on-btn
{
    overflow: hidden;
  white-space: nowrap;
  display: inline-block;
  text-overflow: ellipsis;
}
</style>

<style>
  .mobile-display{display:none}
  .desktop-display{display:block}
.portfolio_section .img-box {
    position: relative;
    margin: 0px;
}
.portfolio_section .img-box::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 0;
    height: 0;
    background-color: rgba(37, 28, 229, 0.8);
    opacity: 0%;
    border-radius: 25px;
    -webkit-transition: all 0.1s;
    transition: all 0.1s;
}


     @media screen 
        and (max-device-width: 900px) 
        and (min-device-width: 360px) 
        { 
            
            .mobile-display{display:block}
            .desktop-display{display:none}
        .carousel-control-prev,
        .carousel-control-next {
            background-color: #e1e1e1;
            width: 5vh;
            height: 5vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }
        section{
          height : auto;
        }
    }

</style>

<div class="desktop-display">
<!-- <div class="section" id="section2"> -->
  <section class="portfolio_section section">
      <div class="container">
        <div class="custom_heading-container">
          <h2>
            Aktivitas Kaizen
            
          </h2>
          <hr>
        </div>
        
        <div class="layout_padding2-top">
          <div class="row" style="background: #ff9494;">
            <div class="col-md-3" style="padding: 0px">
            <div class="img-box">
                <img src="<?php echo base_url();?>/template/images/<?php echo $aktivitas_kaizen[0]['IMG']; ?>" alt="">
                
              </div>
            
            </div>
            <div class="col-md-3" style="padding: 15px">
              <b><?php echo $aktivitas_kaizen[0]['IMG_TITLE'];?></b>
              <div class="img-box">
                  <?php echo $aktivitas_kaizen[0]['IMG_DESC'];?>
              </div>
            </div>
            <div class="col-md-3" style="padding: 0px">
            
              <div class="img-box">
                <img src="<?php echo base_url();?>/template/images/<?php echo $aktivitas_kaizen[1]['IMG']; ?>" alt="">
                
              </div>
              
            </div>
            <div class="col-md-3" style="padding: 15px">
              <b><?php echo $aktivitas_kaizen[1]['IMG_TITLE'];?></b>
              <div class="img-box">
                  <?php echo $aktivitas_kaizen[1]['IMG_DESC'];?>
              </div>
              
            </div>
            
          </div>



          <div class="row" style="background: #e0e0e0;">
            <div class="col-md-3" style="padding: 15px">
              <b><?php echo $aktivitas_kaizen[2]['IMG_TITLE'];?></b>
              <div class="img-box">
                  
                  <?php echo $aktivitas_kaizen[2]['IMG_DESC'];?>
              </div>
              
            </div>
            <div class="col-md-3" style="padding: 0px">
            
              <div class="img-box">
                <img src="<?php echo base_url();?>/template/images/<?php echo $aktivitas_kaizen[2]['IMG']; ?>" alt="">
                
              </div>
              
            </div>
            <div class="col-md-3" style="padding: 15px">
            <b><?php echo $aktivitas_kaizen[3]['IMG_TITLE'];?></b>
              <div class="img-box">
                  
                  <?php echo $aktivitas_kaizen[3]['IMG_DESC'];?>
              </div>
              
            </div>
            <div class="col-md-3" style="padding: 0px">
            
              <div class="img-box">
                <img src="<?php echo base_url();?>/template/images/<?php echo $aktivitas_kaizen[3]['IMG']; ?>" alt="">
                
              </div>
              
            </div>
          </div>


          <div class="row" style="background: #ff9494;">
            <div class="col-md-3" style="padding: 0px">
            
              <div class="img-box">
                <img src="<?php echo base_url();?>/template/images/<?php echo $aktivitas_kaizen[4]['IMG']; ?>" alt="">
              </div>
              
            </div>
            <div class="col-md-3" style="padding: 15px">
              <b><?php echo $aktivitas_kaizen[4]['IMG_TITLE'];?></b>
              <div class="img-box">
                  
                  <?php echo $aktivitas_kaizen[4]['IMG_DESC'];?>
              </div>
              
            </div>
            <div class="col-md-3" style="padding: 0px">
            
              <div class="img-box">
                <img src="<?php echo base_url();?>/template/images/<?php echo $aktivitas_kaizen[5]['IMG']; ?>" alt="">
                
              </div>
              
            </div>
            <div class="col-md-3" style="padding: 15px">
              <b><?php echo $aktivitas_kaizen[5]['IMG_TITLE'];?></b>
              <div class="img-box">
                  
                  <?php echo $aktivitas_kaizen[5]['IMG_DESC'];?>
              </div>
              
            </div>
            
            
          </div>
        </div>
      </div>
    </section>
</div>

<div class="mobile-display">
<section class="news_section layout_padding section" style="background-repeat-y: no-repeat;">
      <div class="containers" style="padding:50px">
        

<div class="col-md-6">
  <div class="row p-2 bg-white border rounded mt-2 mb-2" style="min-height: 130px;">
    <div class="col-4 mt-1">
      <img class="img-fluid img-responsive rounded product-image" src="https://i.ibb.co/VL3w7MC/WJXt0n8-Oimy34fxuz-Ihw.jpg">
    </div>
    <div class="col-5 mt-1">
      <span class="text-primary " data-toggle="tooltip" data-placement="top" title="6 Pc Meal">
        <strong>6 Pc Meal</strong>
      </span>

      <!-- PRICE SECTION -->

      <!-- IF SERVINGS IS MENU -->
      <div class="d-flex flex-wrap flex-row align-items-center">
        <h4 class="mr-1 text-success h6">$20.68</h4>
        <small class="strike-text mb-2">$22.76</small>
      </div>
      <!-- IF SERVINGS IS PLATE -->
      <p class="text-justify text-truncate para mb-0">
        3 Thighs and 2 Drums along with Large box of Taters </p>

    </div>
  </div>
</div>
      </div>
  </section>
</div>
