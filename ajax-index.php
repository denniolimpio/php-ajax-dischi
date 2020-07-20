<?php include  __DIR__ . '/database.php'?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="dist/app.css">
  <title></title>
</head>
<body>

  <header>

    <div class="container">
      <div class="logo">
        <img src= ' img/logo.svg' alt="">
      </div>

    </div>

  </header>

  <main>

    <!-- inizio cont  -->
    <div class="container">
      <!-- inizio album container  -->

      <div id="album-container">


      </div>

      <!-- fine album container  -->


    </div>
    <!-- fine cont dischi -->

  </main>



  <script id="album-template" type="text/x-handlebars-template">

    <div class="album">
      
      <div class="cover">
        <img src="{{ poster }}" alt=" {{ title }}">
      </div>
      <h2> {{title}}</h2>
      <span> {{author}}</span>
      <span>{{year}}</span>

    </div>
  </script>

  <script src="dist/app.js">

  </script>
</body>
</html>
