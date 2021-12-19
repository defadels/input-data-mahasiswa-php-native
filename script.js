<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">



<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
      $(function() {
      $( "#datepicker" ).datepicker();
      });

      window.onload=function(){
      $('#datepicker').on('change', function() {
      var dob = new Date(this.value);
      var today = new Date();
      var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
      $('#umur').val(age);
      });
      }

</script>
</head>
<body>
<p>Tanggal Lahir: <input type="text" id="datepicker"></p>
<p>Umur: <input type="text" id="umur"></p>
</body>
</html>