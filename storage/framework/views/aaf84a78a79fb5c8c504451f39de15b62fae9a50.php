<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Music World</title>

  <link href="assets/img/icon1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


</head>
<body class="bg-dark">

	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="/">Music World</a></h1>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">Top Ten</a></li>
              <li><a class="nav-link scrollto" href="#services">Latest</a></li>
              <li><a class="nav-link scrollto " href="#portfolio">Hot Artists</a></li>
              <li><a class="nav-link scrollto " href="albums.php">Albums</a></li>
              <li class="dropdown"><a href="#"><span>Genre</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li class="dropdown"><a href="#"><span>Afro Pop</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <form action="genre.php" method="POST" enctype="multipart/form-data">
                        <li><button type="submit" class="genre-btn" name="afroArtists">Afro Artists</button></li>
                        <li><button type="submit" class="genre-btn" name="afroSongs">Afro Songs</button></li>
                      </form>
                    </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Dance Hall</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <form action="genre.php" method="POST" enctype="multipart/form-data">
                          <li><button type="submit" class="genre-btn" name="dancehallArtists">DanceHall Artists</button></li>
                          <li><button type="submit" class="genre-btn" name="dancehallSongs">DanceHall Songs</button></li>
                        </form>
                    </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Gospel</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <form action="genre.php" method="POST" enctype="multipart/form-data">
                          <li><button type="submit" class="genre-btn" name="gospelArtists">Gospel Artists</button></li>
                          <li><button type="submit" class="genre-btn" name="gospelSongs">Gospel Songs</button></li>
                        </form>
                    </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Hip Hop</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <form action="genre.php" method="POST" enctype="multipart/form-data">
                          <li><button type="submit" class="genre-btn" name="hiphopArtists">HipHop Artists</button></li>
                          <li><button type="submit" class="genre-btn" name="hiphopSongs">HipHop Songs</button></li>
                        </form>
                    </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Reggae</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <form action="genre.php" method="POST" enctype="multipart/form-data">
                          <li><button type="submit" class="genre-btn" name="reggaeArtists">Reggae Artists</button></li>
                          <li><button type="submit" class="genre-btn" name="reggaeSongs">Reggae Songs</button></li>
                        </form>
                    </ul>
                 </li>
                </ul>
              </li>
              <li class="dropdown dropdown1"><a href="#"><span>A - Z</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <form action="a-z.php" method="POST" enctype="multipart/form-data">
                    <li><button type="submit" class="az-btn" name="number">#</button></li>
                    <li><button type="submit" class="az-btn" name="a">A</button></li>
                    <li><button type="submit" class="az-btn" name="b">B</button></li>
                    <li><button type="submit" class="az-btn" name="c">C</button></li>
                    <li><button type="submit" class="az-btn" name="d">D</button></li>
                    <li><button type="submit" class="az-btn" name="e">E</button></li>
                    <li><button type="submit" class="az-btn" name="f">F</button></li>
                    <li><button type="submit" class="az-btn" name="g">G</button></li>
                    <li><button type="submit" class="az-btn" name="h">H</button></li>
                    <li><button type="submit" class="az-btn" name="i">I</button></li>
                    <li><button type="submit" class="az-btn" name="j">J</button></li>
                    <li><button type="submit" class="az-btn" name="k">K</button></li>
                    <li><button type="submit" class="az-btn" name="l">L</button></li>
                    <li><button type="submit" class="az-btn" name="m">M</button></li>
                    <li><button type="submit" class="az-btn" name="n">N</button></li>
                    <li><button type="submit" class="az-btn" name="o">O</button></li>
                    <li><button type="submit" class="az-btn" name="p">P</button></li>
                    <li><button type="submit" class="az-btn" name="q">Q</button></li>
                    <li><button type="submit" class="az-btn" name="r">R</button></li>
                    <li><button type="submit" class="az-btn" name="s">S</button></li>
                    <li><button type="submit" class="az-btn" name="t">T</button></li>
                    <li><button type="submit" class="az-btn" name="u">U</button></li>
                    <li><button type="submit" class="az-btn" name="v">V</button></li>
                    <li><button type="submit" class="az-btn" name="w">W</button></li>
                    <li><button type="submit" class="az-btn" name="x">X</button></li>
                    <li><button type="submit" class="az-btn" name="y">Y</button></li>
                    <li><button type="submit" class="az-btn" name="z">Z</button></li>
                  </form>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Search</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="text-center">
                  <form action="search.php" method="post">
                    <li><a href="#"><input name="search-term" type="text" class="search" placeholder="artist's name..." required></a></li>
                    <li><button class="btn btn-sm btn-success" name="search">search</button></li>
                  </form>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Upload</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header>


	<?php echo $__env->yieldContent('content'); ?>	



  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
</body>

<script type="text/javascript" src="/js/bootstrap.js"></script>
</html><?php /**PATH D:\musicworld\resources\views/layouts/layout.blade.php ENDPATH**/ ?>