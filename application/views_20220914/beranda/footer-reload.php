<script>
     var timer = 0;
    var alamat2 = "<?php echo base_url();?>C_kaizen/"
    function startRedirect() {
      timer = setTimeout(function () {
        window.location.replace(alamat2);
      }, 30000);
    }
    function restartTimer() {
      clearTimeout(timer);
      startRedirect();
    }
    $(function () {
      startRedirect();
      $(document).mousemove(restartTimer).keyup(restartTimer);
    });
    </script>