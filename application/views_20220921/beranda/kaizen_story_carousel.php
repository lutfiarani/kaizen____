<style>
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
    }
</style>

<div class="desktop-display section">
    <section class="portfolio_section">
        <div class="container">
        <div class="custom_heading-container">
            <h2>
            Kaizen Story
            </h2>
            <hr>
        </div>
        <p>
            Membangun kaizen selangkah demi selangkah, dan inilah bukti perjalanan kami. Dukung kami, agar kita selalu bisa konsisten membangun budaya kaizen.
        </p>
        
        <div class="layout_padding2-top" style="padding-top:20px">
        <!-- <div class="col-md-12"> -->
            <div class="row">
            <?php 
            for($i = 0; $i<count($kaizen_story); $i++){
                    $ks = $kaizen_story[$i];
                // foreach($kaizen_story as $ks ){
                    echo '<div class="col-md-3">
                    
                    <div style="background-color:#ffffa8; font-size: 25px; margin-top:20px">
                        <center><h3>'.$ks['TITLE'].'</h3></center>
                    </div>
                    <div class="img-box">
                    <img src="';
                            echo base_url();
                            echo 'template/images/welcoming_page/'.$ks['IMG_TITLE'].'" alt="" width="400px" 
                            height="176">
                    </div>
                    <table border="1" width="100%" style="margin-top:8px; font-size:20px; border: 1px solid #ffffff; background-color:#aecadb">
                        <tr>
                        <td style="padding-left:5px;">
                            <div style="height: 70px; overflow:hidden;">
                            Fasilitas Kaizen
                            </div>
                        </td>
                        <td style="padding-left:5px;">
                            <div style="height: 70px; overflow:hidden;">
                            '.$ks['FASILITAS'].'
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <td style="padding-left:5px;">
                            <div style="height: 70px; overflow:hidden;">
                            Total Kaizen Imple.
                            </div>
                        </td>
                        <td style="padding-left:5px;">
                            <div style="height: 70px; overflow:hidden;">
                            '.$ks['KAIZEN_IMPLE'].' ide
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <td style="padding-left:5px;">
                            <div style="height: 70px; overflow:hidden;">
                            Total Hadiah
                            </div>
                        </td>
                        <td style="padding-left:5px;">
                            <div style="height: 70px; overflow:hidden;">
                            '.$ks['HADIAH'].'
                            </div>
                        </td>
                        </tr>
                    </table>
                    </div>';
                }
            ?>
            
            
            </div>
        </div>
                
        </div>
    </section>
</div>
<div class="mobile-display section">
    <section class="portfolio_section">
        <div class="container">
        <div class="custom_heading-container">
            <h2>
            Kaizen Story
            </h2>
            <hr>
        </div>
        <p>
            Membangun kaizen selangkah demi selangkah, dan inilah bukti perjalanan kami. Dukung kami, agar kita selalu bisa konsisten membangun budaya kaizen.
        </p>
        
        <div class="layout_padding2-top" style="padding-top:20px">
        <!-- <div class="col-md-12"> -->
            <div class="row">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="3000" >
                <ol class="carousel-indicators" style="margin-bottom: auto">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" style=" margin-top: 0px">
                    <div class="carousel-item active">
                        <?php 
                            $i=0;
                            echo '<div class="col">
                    
                            <div style="background-color:#ffffa8; font-size: 25px; margin-top:20px">
                                <center><h3>'.$kaizen_story[$i]['TITLE'].'</h3></center>
                            </div>
                            <div class="img-box">
                            <img src="';
                                    echo base_url();
                                    echo 'template/images/welcoming_page/'.$kaizen_story[$i]['IMG_TITLE'].'" alt="" width="400px" 
                                    height="176">
                            </div>
                            <table border="1" width="100%" style="margin-top:8px; font-size:20px; border: 1px solid #ffffff; background-color:#aecadb">
                                <tr>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    Fasilitas Kaizen
                                    </div>
                                </td>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    '.$kaizen_story[$i]['FASILITAS'].'
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    Total Kaizen Imple.
                                    </div>
                                </td>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    '.$kaizen_story[$i]['KAIZEN_IMPLE'].' ide
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    Total Hadiah
                                    </div>
                                </td>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    '.$kaizen_story[$i]['HADIAH'].'
                                    </div>
                                </td>
                                </tr>
                            </table>
                            </div>';
                        
                        ?>
                    </div>
                    
                        <?php 
                            for ($i = 1; $i<count($kaizen_story); $i++){
                                echo '<div class="carousel-item"> <div class="col">
                    
                            <div style="background-color:#ffffa8; font-size: 25px; margin-top:20px">
                                <center><h3>'.$kaizen_story[$i]['TITLE'].'</h3></center>
                            </div>
                            <div class="img-box">
                            <img src="';
                                    echo base_url();
                                    echo 'template/images/welcoming_page/'.$kaizen_story[$i]['IMG_TITLE'].'" alt="" width="400px" 
                                    height="176">
                            </div>
                            <table border="1" width="100%" style="margin-top:8px; font-size:20px; border: 1px solid #ffffff; background-color:#aecadb">
                                <tr>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    Fasilitas Kaizen
                                    </div>
                                </td>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    '.$kaizen_story[$i]['FASILITAS'].'
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    Total Kaizen Imple.
                                    </div>
                                </td>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    '.$kaizen_story[$i]['KAIZEN_IMPLE'].' ide
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    Total Hadiah
                                    </div>
                                </td>
                                <td style="padding-left:5px;">
                                    <div style="height: 70px; overflow:hidden;">
                                    '.$kaizen_story[$i]['HADIAH'].'
                                    </div>
                                </td>
                                </tr>
                            </table>
                            </div> </div>';
                            }
                           
                        ?>
                   
                    
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            
            </div>
        </div>
                
        </div>
    </section>
</div>
