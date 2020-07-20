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

      <div class="album-container">

        <?php foreach ($database as $album ) { ?>

          <div class="album">
            <div class="cover">
              <img src=" <?php echo $album['poster'] ?>" alt=" cover">
            </div>
            <h2> <?php echo $album['title'] ?></h2>
            <span> <?php echo $album['author'] ?></span>
            <span> <?php  echo $album['year'] ?></span>
          </div>


        <?php } ?>




      </div>

      <!-- fine album container  -->


    </div>
    <!-- fine cont dischi -->

  </main>


  <footer></footer>

</body>
</html>
