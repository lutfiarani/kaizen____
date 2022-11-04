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
        
        <div class="row">
          <!-- <div class="col-md-3"> -->
        
              <div class="detail-box" style="margin-top: 50px; padding:10px">
                <h2>
                  <b>Aktivitas Kaizen</b>
                </h2>
                <p style="font-size: 20px;">
                    Bergerak bersama dengan segala strategi
                    <br> demi terbentuknya budaya Kaizen
                </p>
              </div>
          <div class="col-md-8">
            <div class="card-deck">
                <div id="carouselExampleIndicators_akt" class="carousel slide" data-ride="carousel" data-interval="3000" style="height: auto" >
                <ol class="carousel-indicators" style="margin-bottom: auto">
                              <li data-target="#carouselExampleIndicators_akt" data-slide-to="0" class="active"></li>
                    <?php
                      for($i = 1; $i<count($aktivitas_kaizen); $i++){
                          echo '<li data-target="#carouselExampleIndicators_akt" data-slide-to="'.$i.'"></li>';
                      }
                    ?>
                   
                </ol>
                <div class="carousel-inner" style=" margin-top: 0px">
                    <div class="carousel-item active">
                        <?php 
                            $i=0;
                            echo '<div class="card">
                            <img class="card-img-top" src="';
                            echo base_url();
                            echo '/template/images/welcoming_page/'.$aktivitas_kaizen[$i]['IMG'].'" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><b>'.$aktivitas_kaizen[$i]['IMG_TITLE'].'</b></h5>
                                <p class="card-text">'.$aktivitas_kaizen[$i]['IMG_DESC'].'...</p>
                            </div>
                            
                            </div>';
                        ?>
                    </div>
                    
                    <!-- <div class="carousel-item"> -->
                        <?php 
                         for ($i = 1; $i<count($kaizen_story); $i++){
                            echo '<div class="carousel-item">';
                         
                                echo '<div class="card">
                                <img class="card-img-top" src="';
                                echo base_url();
                                echo '/template/images/welcoming_page/'.$aktivitas_kaizen[$i]['IMG'].'" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b>'.$aktivitas_kaizen[$i]['IMG_TITLE'].'</b></h5>
                                    <p class="card-text">'.$aktivitas_kaizen[$i]['IMG_DESC'].'</p>
                                </div>
                            
                            </div></div>';
                         }
                        ?>
                    
                   
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators_akt" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators_akt" role="button" data-slide="next">
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
