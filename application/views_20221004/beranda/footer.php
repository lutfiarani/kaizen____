<style>
   h1 {
        font-weight: bold;
   }

   .mobilec-display{display:none}
   .desktopc-display{display:block}

   
    @media screen 
    and (max-device-width: 900px) 
    and (min-device-width: 360px) 
    { 
      
    .mobilec-display{display:block}
    .desktopc-display{display:none}
    .all-browsers {
      margin: 0;
      padding: 5px;
      background-color: lightgray;
    }

    .all-browsers > h1, .browser {
      margin: 10px;
      padding: 5px;
    }

    .browser {
      background: white;
    }

    .browser > h2, p {
      margin: 4px;
      font-size: 90%;
    }

    footer {
      text-align: center;
      /* margin-top: 60vh; */
      padding: 3px;
      background-color: DarkBlue;
      color: white;
      /* position: relative; */
    }
  }
</style>
  
  
  <!-- info section -->
<div class="desktopc-display">
  <section class="info_section" style="background-color:#000000; height: 25%; margin-top:50px;">
    <!-- <div class="container"> -->
      <div class="info_social">
        <!-- <div class="row"> -->
            <div class="col-sm-4">
                <h5 style="margin-bottom:20px; color:#54a5e2">Terhubung Dengan kami</h5>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                </p>
            </div>
        <div class="col-sm-4">
            <h5 style="margin-bottom:20px;  color:#54a5e2">Kontak Kami Di</h5>
            <table border="0" width="100%">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>fatah.amt@hsinni.com</td>
                </tr>   
                <tr>
                    <td>Ext</td>
                    <td>:</td>
                    <td>425</td>
                </tr>
            </table>
        </div>
        <div class="col-sm-4">
            <h5 style="margin-bottom:20px; color:#54a5e2">Kantor Kami</h5>
            <table border="0" width="100%">
                <tr>
                    <td>Hwaseung Indonesia</td>
                </tr>   
                <tr>
                    <td>Jln. Krasak Banyuputih. RT.09/RW.03 Desa banyuputih, Kec.kalinyamatan, Kab. Jepara</td>
                </tr>
            </table>
        </div>
      </div>
    <!-- </div> -->
</section>


  <!-- end info_section -->
  
  <!-- footer section -->
  <section class="container-fluid footer_section section" style="background-color:#54a5e2; height: 15%">
    <p style="color:#ffffff; align:center; ">
      &copy; <?php echo date('Y') ?> PT Hwa Seung Indonesia
    </p>
  </section>
</div>
  <!-- footer section -->

  <!-- Mobile Footer -->
  <div class="mobilec-display">
      <footer>
        <div class="row">
          <div class="col">Hwaseung Indonesia</div>
          <!-- <div class="col">email: fatah.amt@hsinni.com</div> -->
          <!-- <div class="col">Hwaseung Indonesia</div> -->
        </div>
      </footer>
  </div>
  <!-- //mobile Footer -->