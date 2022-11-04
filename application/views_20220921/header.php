<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>KaizenKU</title>

  <!-- slider stylesheet -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/fullpage/fullpage.css" /> -->
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>template/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url();?>template/css/responsive.css" rel="stylesheet" />
  <!-- css tambahan -->
  <link href="<?php echo base_url();?>template/css/baru.css" rel="stylesheet" />
  <!-- <link href="<?php echo base_url();?>template/css/navbar.css" rel="stylesheet" /> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  
	<!-- <link rel="stylesheet" type="text/css" href="examples.css" /> -->
  <style media="all">
    html, body {
      height: 100%;
      margin: 0;
    }

    header{
      z-index: 999999;
    }
    /* body { padding-top: 70px; } */

    nav {
      z-index: 9999;
    }
    .full-height {
      height: 100%;
      background: yellow;
    }

    .mobile-display{
      display:none
    }
    .desktop-display{display:block}

    
    .mobile-container{display:none}
   
    @media screen 
    and (max-device-width: 900px) 
    and (min-device-width: 360px) 
    { 
        
      .mobile-container{display:block}
      /* .active {
        background-color: #2283c9;
        color: white;
      } */

     
        .mobile-container {
          max-width: auto;
          margin: auto;
          background-color: #555;
          /* height: 500px; */
          color: white;
          border-radius: 10px;
          z-index :99999;
        }

        .topnav_mobile {
          overflow: hidden;
          background-color: #2283c9;
          position: relative;
          z-index :99999;
        }

        .topnav_mobile #myLinks {
          display: none;
        }

        .topnav_mobile a {
          float: left;
          color: white;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
          display : block;
        }

        .topnav_mobile a.icon {
          float: right;
        }

        .topnav_mobile a:hover {
          background-color: #ddd;
          color: black;
        }

        .sticky {
          position: fixed;
          top: 0;
          width: 100%;
        }

        /* .active {
          background-color: #2283c9;
          color: white;
        } */

      /* .desktop-display{display:none} */
    }

  </style>
</head>

<!-- <body background="<?php echo base_url();?>/template/images/background_horizontal.png"> -->
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <div class="desktop-display">
      <header class="header_section">
        <div class="container-fluid">
      
          <nav class="navbar navbar-expand-lg custom_nav-container navbar-fixed-top  " id="navbarku">
            <!-- <div class="container"> -->
              <a class="navbar-brand" >
                <img src="<?php echo base_url();?>/template/images/hwi_2.png" alt="">
                <span>
                  KaizenKU
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-right" style="margin-left: auto !important;">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="<?php echo base_url();?>C_kaizen/">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url();?>c_kaizen/taget_kaizen_implemented">Status </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url();?>C_login">Login Admin </a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            <!-- </div> -->
          </nav>
        
        </div>
      </header>
    </div>
    <!-- end header section -->
</div>

<!-- Simulate a smartphone / tablet -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
  <div class="topnav_mobile">
    
    <a href="#home" class="active"><img src="<?php echo base_url();?>/template/images/hwi_2.png" alt="" style="width: 80px;margin-right: 5px;"></a>
    <div id="myLinks">
      <a href="<?php echo base_url();?>C_kaizen/">Beranda</a>
      <a href="<?php echo base_url();?>c_kaizen/taget_kaizen_implemented">Status</a>
      <a href="<?php echo base_url();?>C_login">Login Admin</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <img src="<?php echo base_url();?>/template/images/menu.png">
    </a>
  </div>


<!-- End smartphone / tablet look -->
</div>
<main>

  <!-- <script type="text/javascript" src="<?php echo base_url();?>/template/js/jquery-3.4.1.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/template/js/bootstrap.js"></script>
  <script>
      function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }

  </script>
<!-- </body>
</body> -->

<!-- </html> -->