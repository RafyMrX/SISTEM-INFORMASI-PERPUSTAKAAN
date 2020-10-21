<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- font  -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('/assets/css/style.css')}}">

</head>
<body>
	<!-- header -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#" style="color: #fff;"><img src="{{url('/assets/img/brand/logosby.png')}}" alt="" width="40"> Perpustakaan Surabaya</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Koleksi terbaru</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Usulan Koleksi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Hubungi Kami</a>
					</li>

					<li class="nav-item dropdown my-2 my-lg-0">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i> Akun
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Register</a>
							<a class="dropdown-item" href="#">Login</a>
						</div>
					</li>


				</ul>

			</div>
		</div>
	</nav>
	<!-- End Header -->

	<div id="carouselExampleIndicators" class="carousel slide slides" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="{{url('/assets/img/psby.jpg')}}" alt="First slide">
			</div>
<!--     <div class="carousel-item">
      <img class="d-block w-100" src="/img/perpus-balai-pemuda2.jpg" alt="Second slide">
  </div> -->
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
</a>
</div>

<!-- Pencarian Katalog -->

<div class="container justify-content-center box-up">
	<div class="form-row ">
		<div class=" form-group col-md-6">
			<label for="Jenis">Jenis Koleksi</label>
			<select class="form-control" name="jenis_koleksi">
				<option>Buku</option>
				<option>Majalah</option>
				<option>Novel</option>
			</select>
		</div>
		<div class=" form-group col-md-6">
			<label for="Jenis">Kriteria</label>
			<select class="form-control" name="jenis_koleksi">
				<option>Judul</option>
				<option>Pengarang</option>
				<option>ISBN</option>
				<option>Subyek</option>
			</select>
		</div>

		<div class=" form-group col-md-12">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Masukkan Kata Kunci" aria-label="Recipient's username" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button"></button>
				</div>
			</div>
		</div>

	</div>
</div>
<br>
<br>
<br>
<br>
<footer class="page-footer font-small pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold mt-3 mb-4"><img src=""><img src="{{url('/assets/img/brand/logosby.png')}}" alt="" width="40"> Perpustakaan Surabaya</h5>
        <spn>Perpustakaan Masyarakat Surabaya</span>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

 

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color: #154178;">© 2020 Copyright:
    <a href="{{url('/')}}">Dare Dave Team</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>