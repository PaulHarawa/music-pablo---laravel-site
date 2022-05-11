<?php

  namespace App\Http\Controllers;

  use Illuminate\Support\Facades\DB;
  use App\Models\User;
  use Illuminate\Http\Request;
  use App\Http\Controllers\Controller;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Music Pablo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../../assets/img/icon1.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/player/music.css" rel="stylesheet">
  <link href="../../css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
   #player{
     text-align: center;
   }
   .topten-col{
     text-align: center;
   }
   .captionII{
     font-size: 14px;
   }
   .timeX{
     font-size: 15px;
   }
   #audioControl{
     margin-top: 10px;
   }
   .download{
    margin-top: 10px;
   }
   .tags-header{
     color: white;
     font-size: 17px;
   }
   .tags-link{
     background-color: transparent;
     border: none;
     color: #19AF54;
     font-size: 15px;
   }
   .tags-link:hover{
     background-color: transparent;
     border: none;
     color: #199454;
     font-size: 15px;
     transition: 0.4s;
   }
   #progress:hover{
     cursor: pointer;
   }

  </style>
</head>

<body class="bg-dark">

  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo text-uppercase"><a href="/">Music Pablo</a></h1>

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="/">Home</a></li>
              <li><a class="nav-link scrollto" href="/all-artists">All Artists</a></li>
              <li><a class="nav-link scrollto " href="/all-albums">All Albums</a></li>
              <li class="dropdown"><a href="#"><span>Genre</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li class="dropdown"><a href="#"><span>Afro Pop</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <form action="genre.php" method="POST" enctype="multipart/form-data">
                        <li><a class="genre-btn" name="afroArtists" href="/afro-artists">Afro Artists</a></li>
                        <li><a class="genre-btn" name="afroSongs" href="/afro-songs">Afro Songs</a></li>
                        <li><a class="genre-btn" name="hiphopAlbums" href="/afro-albums">Afro Albums</a></li>
                      </form>
                    </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Dance Hall</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <form action="genre.php" method="POST" enctype="multipart/form-data">
                          <li><a class="genre-btn" name="dancehallArtists" href="/dancehall-artists">DanceHall Artists</a></li>
                          <li><a class="genre-btn" name="dancehallSongs" href="/dancehall-songs">DanceHall Songs</a></li>
                          <li><a class="genre-btn" name="hiphopAlbums" href="/dancehall-albums">DanceHall Albums</a></li>
                        </form>
                    </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Gospel</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <form action="genre.php" method="POST" enctype="multipart/form-data">
                          <li><a class="genre-btn" name="gospelArtists" href="/gospel-artists">Gospel Artists</a></li>
                          <li><a class="genre-btn" name="gospelSongs" href="/gospel-songs">Gospel Songs</a></li>
                          <li><a class="genre-btn" name="hiphopAlbums" href="/gospel-albums">Gospel Albums</a></li>
                        </form>
                    </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Hip Hop</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <form action="genre.php" method="POST" enctype="multipart/form-data">
                          <li><a class="genre-btn" name="hiphopArtists" href="/hiphop-artists">HipHop Artists</a></li>
                          <li><a class="genre-btn" name="hiphopSongs" href="/hiphop-songs">HipHop Songs</a></li>
                          <li><a class="genre-btn" name="hiphopAlbums" href="/hiphop-albums">HipHop Albums</a></li>
                        </form>
                    </ul>
                 </li>
                 <li class="dropdown"><a href="#"><span>Reggae</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <form action="genre.php" method="POST" enctype="multipart/form-data">
                          <li><a class="genre-btn" name="reggaeArtists" href="/reggae-artists">Reggae Artists</a></li>
                          <li><a class="genre-btn" name="reggaeSongs" href="/reggae-songs">Reggae Songs</a></li>
                          <li><a class="genre-btn" name="hiphopAlbums" href="/reggae-albums">Reggae Albums</a></li>
                        </form>
                    </ul>
                 </li>
                </ul>
              </li>
              <li class="dropdown dropdown1"><a href="#"><span>A - Z</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <form action="a-z.php" method="POST" enctype="multipart/form-data">
                    <li><a href="/cat-number" class="az-btn" name="number">#</a></li>
                    <li><a href="/cat-a" class="az-btn" name="a">A</a></li>
                    <li><a href="/cat-b" class="az-btn" name="b">B</a></li>
                    <li><a href="/cat-c" class="az-btn" name="c">C</a></li>
                    <li><a href="/cat-d" class="az-btn" name="d">D</a></li>
                    <li><a href="/cat-e" class="az-btn" name="e">E</a></li>
                    <li><a href="/cat-f" class="az-btn" name="f">F</a></li>
                    <li><a href="/cat-g" class="az-btn" name="g">G</a></li>
                    <li><a href="/cat-h" class="az-btn" name="h">H</a></li>
                    <li><a href="/cat-i" class="az-btn" name="i">I</a></li>
                    <li><a href="/cat-j" class="az-btn" name="j">J</a></li>
                    <li><a href="/cat-k" class="az-btn" name="k">K</a></li>
                    <li><a href="/cat-l" class="az-btn" name="l">L</a></li>
                    <li><a href="/cat-m" class="az-btn" name="m">M</a></li>
                    <li><a href="/cat-n" class="az-btn" name="n">N</a></li>
                    <li><a href="/cat-o" class="az-btn" name="o">O</a></li>
                    <li><a href="/cat-p" class="az-btn" name="p">P</a></li>
                    <li><a href="/cat-q" class="az-btn" name="q">Q</a></li>
                    <li><a href="/cat-r" class="az-btn" name="r">R</a></li>
                    <li><a href="/cat-s" class="az-btn" name="s">S</a></li>
                    <li><a href="/cat-t" class="az-btn" name="t">T</a></li>
                    <li><a href="/cat-u" class="az-btn" name="u">U</a></li>
                    <li><a href="/cat-v" class="az-btn" name="v">V</a></li>
                    <li><a href="/cat-w" class="az-btn" name="w">W</a></li>
                    <li><a href="/cat-x" class="az-btn" name="x">X</a></li>
                    <li><a href="/cat-y" class="az-btn" name="y">Y</a></li>
                    <li><a href="/cat-z" class="az-btn" name="z">Z</a></li>

                  </form>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Search</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="text-center">
                  <form method="POST" action="<?php echo e(route('search')); ?>">
                        <?php echo csrf_field(); ?>
                    <li><a href="#"><input name="searchTerm" type="text" class="search" placeholder="Search term..." required></a></li>
                    <li><button type="submit" class="btn btn-sm btn-success" name="search">search</button></li>
                  </form>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="/login">Upload</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header>

  <main id="main">

    <section id="topten">
      <div class="container" data-aos="fade-up">
        <br/><br/>

        <div class="row topten-cols">

          <?php

            $id = $songID;

            $songDetails = DB::select('select * from albums where id = ?', [$id]);

            foreach ($songDetails as $song) {
                $title = $song->song_title;
                $genre = $song->genre;
                $songFile = $song->songs;
                $artwork = $song->artwork;
                $plays = $song->plays;
                $downloads = $song->downloads;

                $_SESSION['newPlays'] = $plays + 1;

                $artistid = $song->artist_id;
                  $artistx = DB::select('select * from users where id = ?', [$artistid]);
                  foreach ($artistx as $one) {
                    $artist = $one->name;
                  }

                $comb = $artist.' - '.$title;

                $newPlays = $plays + 1;

            echo"
            <div class='col-md-5 mx-auto' data-aos='fade-up' data-aos-delay='100'>
              <div class='topten-col1'>
                <div class='img mx-auto'>
                <br>
                  <img src='../../albumsartworks/$artwork' alt='' class='img-fluid'>
                </div>
                <span class='caption text-white text-capitalize'>$artist - $title<span>
                <h2 class='title'>
                  <div class='col-12'>
                    <canvas id='progress' height='7'></canvas>
                      <audio id='audio' ontimeupdate='updateBar()' src='../../albums/$songFile'>
                      </audio>
                      <br>
                      <span class='timeX'>
                        <span id='current-time'></span> -
                        <span id='duration'></span>
                      </span>
                      <br>
                      <button id='audioControl' onclick='togglePlaying(),played()' class='btn btn-success btn-sm'>Play</button>

                        <a name='download' class='btn btn-sm btn-success download' onclick='updateDownloads()' id='downloadButton' href='/download-at/{$id}/$comb'>Download</a>
                        <br>

                        <span class='captionII'>
                          <button class='profile-detail' id='prevDownloads' value='$downloads' hidden></button>
                          <b><span id='downloadsUpdate'>Downloaded: $downloads</span></b>
                        </span>
                      <br>


                      <br>
                      <a href='/' class='col-8 btn btn-sm btn-primary'>Back To Home</a> <br>
                      <a onclick='back()' class='col-8 btn btn-sm btn-primary'>Previous</a>
                  </div>
                </h2>

              </div>
            </div>
            ";
              }

          ?>

        </div>

      </div>
    </section>

          <script>

            function updateDownloads(){

              var prevDownloads = document.getElementById("prevDownloads").value;
              var newDownloads = parseInt(prevDownloads) + parseInt(1);

              var dn = "Downloaded: ";

              document.getElementById("downloadsUpdate").innerHTML = dn + newDownloads;

              document.getElementById("downloadButton").innerHTML = 'Downloaded';

            }

            function back(){
              window.history.back();
            }

            // function played(){
            //   var xmlhttp = new XMLHttpRequest();
            //       xmlhttp.open("GET", "assets/play.php", true);
            //       xmlhttp.send();
            // }

          </script>


  </main><!-- End #main -->

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Music Pablo</h3>
            <p>
              upload music for free!
            </p>
            <br>
            <div class="social-links">
              <a href="tel:+265999358339" class="twitter"><i class="bi bi-telephone"></i></a> +265 999 358 339<br><br>
              <a href="tel:+265999358339" class="facebook"><i class="bi bi-whatsapp"></i></a> +265 999 358 339<br><br>
              <a href="mailto:musicpablo@gmail.com" class="instagram"><i class="bi bi-envelope"></i></a> musicpablo@gmail.com
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Go To</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/all-artists">All Artists</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/all-albums">All Albums</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Follow Us</h4>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Credits</h4>
            <p>Developed by Digitall Mw</p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Music Pablo</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="../../assets/player/play.js"></script>
  <script src="../../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <script>
    function download(){
      window.location.href='../../download.php';
    }
  </script>


</body>

</html>
<?php /**PATH D:\musicworld\resources\views/albumSong.blade.php ENDPATH**/ ?>