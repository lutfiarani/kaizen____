<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<style>
.note-group-select-from-files {
  display: none;
}

.contact_section {
   /* Background pattern from Toptal Subtle Patterns */
   background-image: url(http://localhost/kaizen__/template/login/images/Background_slide12-20.png);
   /* background-color: rgba(255,255,255,0.15); */
   /* opacity : .4; */
   display: block;
 
}

/* .contact_section::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    background-color: rgba(255,255,255,0.15);
} */

.placeholder {
  top: 150px;
  color: #ADA4AA;
  font-family: arial;
  position: absolute;
  text-align: center;
  width: 100%;
  z-index: 1;
  -webkit-transition: all ease-out 0.5s;
  transition: all ease-out 0.5s;
}

.contact_section{
  color : black;
}
</style>
  <section class="contact_section layout_padding-bottom section" id="keIsiIde" >
    <div class="container">
      <!-- <div class="d-flex flex-column align-items-end"> -->
        <div class="custom_heading-container">
          <hr>
          <h1>
            Isikan Idemu
          </h1>
        </div>
      <!-- </div> -->
      <div class="layout_padding-top layout_padding2-bottom">
      
      <form>
        <div class="row">
          <div class="col-md-7">
            <span id="berhasil_upload"></span>
              <div class="contact_form-container">
                  <div>
                    <input type="text" placeholder="NIK" id="nik" name="nik" >
                  </div>
                  <div>
                    <input type="text" placeholder="Nama" id="nama" name="nama" readOnly>
                  </div>
                  <div>
                    <input type="text" placeholder="Jabatan" id="jabatan" name="jabatan" readOnly>
                  </div>
                  <div>
                    <input type="text" placeholder="Gedung" id="gedung" name="gedung" readOnly>
                  </div>
                  <div>
                    <input type="text" placeholder="Bagian" id="bagian" name="bagian" readOnly>
                  </div>
                  <div>
                    <select name="cell" id="cell" placeholder="cell">
                        <option value="">Pilih Cell</option>
                    </select>
                  </div>
              </div>
          </div>
          <div class="col-md-5 contact_form-container">
            <label class="placeholder">Isi ide Anda di sini</label>
            <textarea rows="15" cols="80" id="ide" nama="ide" class="feedback_input"></textarea>
      
            <div class="contact_form-container" style="margin-top:20px">
                <button type="button" id="submit_data">
                  Kirim Ide
                </button>
            </div>
          </div>
          
        </div>
      </form>
        <br>
        <!-- <div class="col-sm-12"> -->
        <div class="card text-black mb-3" style="max-width: 48rem; background-color: rgba(255,255,153); border-radius: 40px;">
          <div class="card-body">
              <p><u>Petunjuk Pengisian</u></p>
                                1. ketik NIK, otomatis Nama, Jabatan, Gedung, Bagian akan terisi<br>
                                2. Klik tanda panah di kolom cell, pilih cell (pilih lainnya jika tidak berada di dalam cell)<br>
                                3. Klik tanda panah di kolom area, pilih area<br>
                                4. Ketik idemu</br>
                                5. Klik tombol kirim</br>
          </div>
        </div>
       
                          <!-- </div>
          
          
        </div>
      </div> -->
      
    </div>
  </section>
<!-- </div> -->



<!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->

  <script>
    $(document).ready(function(){
      $('.feedback_input').on('input', function(){
        if ( $(this).val().length > 0 ) {
          $(this).siblings().css("opacity", "0");
        } else {
          $(this).siblings().css("opacity", "1");
        }
      });
    });

    $( "#nik" ).change(function() {
      $.ajax({
            url : "<?php echo site_url('C_kaizen/ceknik/'); ?>"+$('#nik').val(),
            success : function(o) {
              console.log(o)
                // do something
                if(o.status=='ok'){
                  // alert(o.status)
                  var data = o.data
                  
                    $('#nik').val(data.NIK);
                    $('#nama').val(data.NAME);
                    $('#bagian').val(data.DESCRIPTION);
                    $('#jabatan').val(data.TITLECODE);
                    $('#gedung').val(data.NAMA_GEDUNG);
                    if(($('#gedung').val() == 'MAIN OFFICE')||($('#gedung').val() == 'GEDUNG SABLON')||($('#gedung').val() == 'GEDUNG MATERIAL')||($('#gedung').val() == 'GEDUNG ENGINEERING')||($('#gedung').val() == 'GEDUNG QIP')||($('#gedung').val() == 'OTHER MAIN BUILDING')){
                        $('#cell').hide()
                    }else{
                      $('#cell').show()
                      cell();
                    }
                  
                }
                else{
                  alert(o.msg)
                  location.reload();
                }
            },
            error : function(data) {
                // do something
                console.log(data)
            }
          });
    });

    function cell(){
      var gedung = $('#gedung').val()
      var gedung2 = gedung.substr(gedung.length - 1);
      $.ajax({
            url : "<?php echo site_url('C_kaizen/cekcell/'); ?>"+gedung2,
            success : function(o) {
              console.log(o)
              $("#cell").html(o.data);
            },
            error : function(data) {
                // do something
                console.log(data)
            }
          });
    // });
      }

    $( "#submit_data" ).click(function() {
      var nik       = $('#nik').val()
      var nama      = $('#nama').val()
      var jabatan   = $('#jabatan').val()
      var gedung    = $('#gedung').val()
      var cell      = $('#cell').val()
      var bagian    = $('#bagian').val()
      var kategori  = $('#kategori').val()
      var ide       =  $('#ide').summernote('code');
      
      // console.log(ide)

       $.ajax({
            url : "<?php echo site_url('C_kaizen/simpan_ide'); ?>",
            type:"POST",  
            data:{nik:nik, nama:nama, jabatan:jabatan, gedung:gedung, cell:cell, ide:ide, bagian:bagian, kategori:kategori},  
            success : function(o) {
                console.log(o)
                if(o){
              
                    html ='<div class="p-3 mb-2 bg-success text-white">Data Berhasil Dikirim</div>'
                    $('#nik').val('');
                    $('#nama').val('');
                    $('#jabatan').val('');
                    $('#gedung').val('');
                    $('#cell').val('');
                    $('#bagian').val('');
                    $('#ide').val('');
                    $("#berhasil_upload").html(html);
                }
                else{
                //   location.reload();
                    html ='<div class="p-3 mb-2 bg-danger text-white">Data Gagal Dikirim, silahkan ulangi kembali</div>'
                     
                    $("#berhasil_upload").html(html);
                }
            },
            error : function(data) {
                // do something
                console.log(data)
            }
          });
          
      
    });


  </script>
