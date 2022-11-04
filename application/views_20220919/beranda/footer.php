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
      
    .mobile-display{display:block}
    .desktop-display{display:none}
  }
</style>
  
  
  <!-- info section -->
<div class="desktop-display">
  <section class="info_section" style="background-color:#000000; height: 25%">
    <div class="container">
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
                    <td>johan.me@hsinni.com</td>
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
    </div>
</section>


  <!-- end info_section -->
  
  <!-- footer section -->
  <section class="container-fluid footer_section section" style="background-color:#54a5e2; height: 15%">
    <p style="color:#ffffff; align:center; margin-top: 5vh;">
      &copy; <?php echo date('Y') ?> PT Hwa Seung Indonesia
    </p>
  </section>
</div>
  <!-- footer section -->