<?php
 session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
   <title>PostIT</title>
   <meta name="author" content="Kevin VALERIO">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style/wireframe.css"> </head>

<body class="text-center bg-dark">
  <div class="p-3 h-100 d-flex flex-column">
    <div class="container mb-auto">
      <div class="row">
        <div class="mx-auto col-md-9">
          <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="index.php"><b>PostIT</b></a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span> </button>
              <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
               <?php require_once 'head.php'; ?>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

      <?php
      if(isConnected()){
          echo "<h1>YESS Co!</h1>";
      }
      else{
          echo "<h1>Non pas co</h1>";
      }

      ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h1 class="cover-heading"><b>Créer un nouveau PostIT</b></h1>
          <p class="lead">PostIT est une plateforme vous permettant d'obtenir des post-it virtuels, gratuitement et de façon illimité !.</p>
          <a href="#" class="btn btn-lg btn-light"><b class="">Créer un post-it</b></a>
        </div>
      </div>
    </div>
    <div class="container mt-auto">
      <div class="row">
        <div class="col-md-12">
          <p class="mt-auto text-secondary">Copyright
            <a href="#" class="text-white">Kevin VALERIO</a>, coded with fun for
            <a href="#" class="text-white"> a J(S)Query project</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>