<!doctype html>
<!-- nimi -->
<!--
               kt
              toomas
              28/05/24
-->

<html lang="en">

<head>
  <title>Minust</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <style>
    <?php function pildid() {
      $pildid=array("malta1.jpg","malta2.jpg","malta3.jpg"
      );
      $suvpilt=$pildid[array_rand($pildid)];
      return $suvpilt;
    }

    $suvpilt=pildid();

    ?>.carousel-item:nth-child(1) {
      background-image: url('<?php echo $suvpilt; ?>');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    @media (min-width: 992px) {
      #introCarousel {
        margin-top: -58.59px;
      }

      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 50vh;
      }
    }

    .navbar .nav-link {
      color: #fff !important;
    }

    .maintxt {
      position: relative;
      text-align: center;
      line-height: 4px;
    }

    .maintxt img,
    .overlay-text {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .pealkirjaall {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <a class="navbar-brand nav-link mr-auto" href="avaleht.php">
          <strong>Silmberg</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item active ">
              <a class="nav-link" aria-current="page" href="avaleht.php">Avaleht</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.php">Kontakt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="minust.php">Minust</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="maintxt pealkirjaall">
        <span class="overlay-text" style="color: white; margin-top: 8em">
          <h1> <strong>Minust</strong></h1>
        </span>
      </div>
    </nav>
  </div>
  <div id="introCarousel" class=" carousel-fade shadow-2-strong" data-mdb-carousel-init>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center" data-mdb-theme="dark">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <p class="text-center">lorem loremasdfsdgfgdgsdfsdfgdxfgt</p>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>