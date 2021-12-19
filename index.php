<?php
require_once "config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UAS P.WEB 1</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/Logo.png">

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/datepicker.min.css" rel="stylesheet">
    
    <!-- jQuery UI -->
    <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->

    <!-- styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Fungsi untuk membatasi karakter yang diinputkan -->
    <script language="javascript">
       function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
                if (field == field.form.elements[i])
                    break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
            };
        // else return false
        return false;
    }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            <i class="glyphicon glyphicon-check"></i>
            Project UAS MK Pemrograman WEB 1 Kelas A1
          </a>
        </div>
      </div> <!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
      <?php
      if (empty($_GET["page"])) {
        include "tampil-data.php";
      } elseif ($_GET['page'] == 'tambah') {
        include "form-tambah.php";
      } elseif ($_GET['page'] == 'ubah') {
        include "form-ubah.php";
      } 
      ?>
    </div> <!-- /.container-fluid -->
    
    <footer class="footer">
      <div class="container-fluid">
        <p class="text-muted pull-left">&copy; 2021 Ali Tampan</p>
        <p class="text-muted pull-right ">Theme by <a href="http://www.getbootstrap.com" target="_blank">Bootstrap</a></p>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>

    <script>
      $(function () {

        //datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });

        // toolip
        $('[data-toggle="tooltip"]').tooltip();
      });
        

      // Function jQuery hitung umur
      /*
        Note : ini memakai jQuery UI, bukan dari bootstrap
      */

        // $(document).ready(function () {
        //   $(".datepicker").datepicker({
        //     format: 'dd-mm-yyyy',
        //     onSelect: function (value,ui) {
        //       var hari_ini = new Date();
        //       var umur = hari_ini.getFullYear() - ui.selectedYear;
        //       $('#usia').val(umur);
        //     },
        //     changeMonth: true,
        //     changeYear: true
        //   });
        // });

        $(function() {

          $("#tgl_lahir").datepicker({

                  changeMonth: true,

                  changeYear: true

              });

          });

            window.onload=function(){

                $('#tgl_lahir').on('change', function() {

                    var dob = new Date(this.value);

                    var today = new Date();

                    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));

                    $('#usia').val(age);

                });

            } 

</script>
  </body>
</html>