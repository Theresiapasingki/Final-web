<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #ad7ac4;">
      <p style="color: #ffffff; font-size: 30px; justify-content-center; display: flex; align-items-center;">
      CRUD Data Mahasiswa
    </p>
   </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="<?php echo base_url('/home/halaman_tambah') ?>" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama</th>
          <th scope="col">NIM</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `mahasiswa`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["nim"] ?></td>
            <td><?php echo $row["jurusan"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="<?php echo base_url('/home/halaman_edit') ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="<?php echo base_url('/home/fungsiDelete/') . $row["id"] ?> "class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>




<!-- Slider Start -->
<!-- <section class="slider">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1 class="animated fadeInUp">A Digital Marketing <br>  &#38; Design Agency</h1>
          <p class="animated fadeInUp">We love the Web and the work we do.We work closely with our clients to deliver </br>  the best possible solutions for their needs</p>
          <a href="https://themefisher.com/free-bootstrap-templates/" class="btn btn-main animated fadeInUp" >Free Bootstrap Templates</a>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Wrapper Start -->
<!-- <section class="about section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="block">
          <div class="section-title">
            <h2>About Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id </p>
        </div>
      </div>   .col-md-7 close -->
      <!-- <div class="col-md-5">
        <div class="block">
          <img src="<?=home_assets()?>images/wrapper-img.png" alt="Img">
        </div> -->
      <!-- </div>.col-md-5 close -->
    <!-- </div>
  </div>
</section> -->

<!-- <section class="feature bg-2">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6">
        <h2 class="section-subtitle">Make Reservation</h2>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce
          dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce
          dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
        <p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce
          dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        </p>
        <a href="portfolio.html" class="btn btn-view-works">Reserve</a>
      </div>
    </div>
  </div>
</section> -->

<!-- Service Start -->
<!-- <section class="service">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="section-title">
          <h2>Our Services</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br> there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="icon ion-coffee"></i>
          <h4>Branding</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-compass"></i>
          <h4>Web Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-image"></i>
          <h4>App Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-bug"></i>
          <h4>Start Up</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-headphone"></i>
          <h4>Logo Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-leaf"></i>
          <h4>Development</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-planet"></i>
          <h4>Brand Identity</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-earth"></i>
          <h4>Brand Identity</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Call to action Start -->

