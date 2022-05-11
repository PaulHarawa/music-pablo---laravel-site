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

  <title>Music Mw</title>
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

  <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  
    .section-header-new h3 {
      color: #fff;
      text-transform: capitalize;
      font-size: 26px;
    }
    .section-header h3::after {
      content: "";
      position: absolute;
      display: block;
      width: 40px;
      height: 3px;
      background: #2423CF;
      bottom: 0;
      left: calc(50% - 20px);
    }
    .section-header-new p {
      color: #fff;
      font-family: verdana;
    }

    .border-link{
      border: none;
      color: #18D26E;
    }
    .border-link:hover{
      color: #18EC6E;
      transition: 0.4s;
    }
    .img{
      text-align: center;
    }
    .artwork{
      font-size: 32px;
      color: #2423CF;
    }
    .topten-col:hover .artwork{
      color: #18D26E;
      transition: 0.5s;
    }
    .topten-col:hover .caption{
      color: #18D26E;
      transition: 0.5s;
    }
    .caption{
      font-size: 14px;
      color: #2423CF;
    }
    .iconx{
      font-size: 15px;
      color: #18D26E;
    }
    .profile{
      height: 40vh;
    }
    .image{
      float: left;
    }
    .captions{
      float: left;
    }
    .profile-caption{
      color: #fff;
    }
    .profile-detail{
      color: #949795;
      text-transform: capitalize;
    }
    .like{
      background-color: transparent;
      border: none;
    }
    .likeX{
      color: #18D26E;
      font-size: 20px;
      animation: thumbsup;
      animation-duration: 5s;
      animation-iteration-count: infinite;
    }
    .likeX:hover{
      animation: none;
    }
    .likeX:active{
      animation: none;
    }
    @keyframes  thumbsup {
      0%{color: #18D26E;}
      25%{color: #2423CF;}
      50%{color: #18D26E;}
      75%{color: #2423CF;}
      100%{color: #18D26E;}
    }
    .liked{
      color: #18D26E;
      text-transform: uppercase;
    }
  </style>
</head>

<body class="bg-dark">

  <!-- ======= Header ======= -->
  <!-- End Header -->

  <!-- ======= hero Section ======= -->
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Featured trending Section Section ======= -->
    <!-- End Featured trending Section -->

    <!-- ======= topten Us Section ======= -->
    <section id="topten">
      <div class="container" data-aos="fade-up">

        <header class="section-header section-header-new">
          <br>

          <h3>

            <?php 

            foreach ($artistCat as $artist) {

              $artistName = $artist->name;

              $cat = str_split($artistName);

              $first = $cat[0];
            }
            echo $first;
          ?>

          </h3>
        </header>
        <br>

        <div class="row topten-cols">

        <?php 

        echo "<br><br>";

        foreach ($artistCat as $artist) {

          $artistId = $artist->id;
          $name = $artist->name;
          $genre = $artist->genre;

          $combi = $name.'-profile';

          $comb = strtr($combi," '","--");

          echo"
          <div class='col-md-4' data-aos='fade-up' data-aos-delay='100'>
            <div class='topten-col'>
              <div class='img'>

                <a class='bg-transparent border-link text-capitalize' name='song' href='/artist/{$artistId}/{$comb}'>$name <span class='bi bi-play-circle iconx'></span>
                <br>                
                <span class='caption text-capitalize'>$genre</span><br>
                </a>
                <br>
              </div>
            </div>
            <br>
          </div>
          
                
          ";

        }
        
        ?>

        </div>

      </div>
        <br><br>
        <div class="row bth-btn">
          <a href='/' class='col-8 col-md-5 btn btn-sm btn-primary mx-auto'>Back To Home</a>
        </div>
    </section>

  
          
          <script>

            function likeArtist(){
              
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.open('GET', 'like.php', true);
              xmlhttp.send();
              
              var prevLikes = document.getElementById("prevLikes").value;
              var newLikes = parseInt(prevLikes) + parseInt(1);

              document.getElementById("newView").innerHTML = newLikes;
              document.getElementById("liked").innerHTML = "liked!";
              document.getElementById("afterLike").remove();

            }

          </script>

    <!-- ======= trending Section ======= -->
    <!-- End trending Section -->

    <!-- ======= Call To Action Section ======= -->
    <!-- End Call To Action Section -->

    <!-- ======= Skills Section ======= -->
    <!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <!-- End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
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

</body>

</html><?php /**PATH D:\musicworld\resources\views/a-z.blade.php ENDPATH**/ ?>