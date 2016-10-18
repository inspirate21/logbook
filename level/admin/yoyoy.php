
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Logbook- BPTP Jakarta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://mistic100.github.io/Bootstrap-Confirmation/assets/css/docs.min.css" rel="stylesheet">
  <link href="http://mistic100.github.io/Bootstrap-Confirmation/assets/css/style.css" rel="stylesheet">

  <style>
    #content {
      background:#009ece;
      background:linear-gradient(135deg, #009ece, #003354);
    }
  </style>
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="http://mistic100.github.io/Bootstrap-Confirmation/assets/js/docs.min.js"></script>
<body>
  
<h3 id="singleton">Singleton</h3>
  <p>Only one boxe visible at once.</p>
  <div class="bs-example">
    <div class="bs-example-tooltips">
      <button class="btn btn-default" data-toggle="confirmation-singleton">Confirmation 1</button>
      <button class="btn btn-default" data-toggle="confirmation-singleton">Confirmation 2</button>
    </div>
  </div>
  
  <script src="http://mistic100.github.io/Bootstrap-Confirmation/dist/bootstrap-confirmation2/bootstrap-confirmation.min.js"></script>

<script>
  $('[data-toggle=confirmation]').confirmation();
  $('[data-toggle=confirmation-singleton]').confirmation({ singleton:true });
  $('[data-toggle=confirmation-popout]').confirmation({ popout: true });
</script>

</body>
</html>