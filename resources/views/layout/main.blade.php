<!DOCTYPE html>
<html>

<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- font  -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('/assets/user/css/style.css')}}">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Icon -->
	<link rel="icon" href="{{url('/assets/user/img/brand/logosby.png')}}" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
	<!-- header -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#" style="color: #fff;"><img src="{{url('/assets/user/img/brand/logosby.png')}}" alt="" width="32"> Perpus SMK Wachid Hasyim</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Koleksi Terbaru
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{url('/buku')}}">Buku</a>
							<a class="dropdown-item" href="{{url('/jurnal')}}">Jurnal</a>
							<a class="dropdown-item" href="{{url('/majalah')}}">Majalah</a>

						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/usulan-koleksi')}}">Usulan Koleksi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/tentang-kami')}}">Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/hubungi-kami')}}">Hubungi Kami</a>
					</li>

					<li class="nav-item dropdown my-2 my-lg-0">
						@if(session()->has('SessionPublic'))
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i> {{session()->get('SessionNama')}}
						</a>
						@else
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i> Akun
						</a>
						@endif


						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							@if(session()->has('SessionPublic'))
							<a class="dropdown-item" href="{{url('/pinjaman')}}">Pinjaman Saya</a>
							<a class="dropdown-item" href="{{url('/logoutpublic')}}">Logout</a>

							@else
							<a class="dropdown-item" href="{{url('/login')}}" >Login as User</a>
							<a class="dropdown-item" target="_blank" href="{{url('/admin')}}" >Login as Admin</a>
							<a class="dropdown-item" href="{{url('/pendaftaran-anggota')}}">Register</a>
							@endif



						</div>
					</li>


				</ul>

			</div>
		</div>
	</nav>

	<!-- Modal -->


	@yield("container")


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
					<h5 class="font-weight-bold mt-3 mb-4"><img src=""><img src="{{url('/assets/user/img/brand/logosby.png')}}" alt="" width="40">  SMK Wachid Hasyim Surabya</h5>
					<p>Jl. Sidotopo Wetan Baru No.37, Sidotopo Wetan, Kec. Kenjeran, Surabaya, Jawa Timur 60128</p>
				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-4 mx-auto">

					<!-- Links -->
					<h5 class=" mt-3 mb-4">Koleksi Terbaru</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Buku</a>
						</li>
						<li>
							<a href="#!">Majalah</a>
						</li>
						<li>
							<a href="#!">Jurnal</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none">

				<!-- Grid column -->
				<div class="col-md-4 mx-auto">

					<!-- Links -->
					<h5 class=" mt-3 mb-4">Sosial Media</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">Facebook</a>
						</li>
						<li>
							<a href="#!">Instagram</a>
						</li>
						<li>
							<a href="#!">Twitter</a>
						</li>
					</ul>

				</div>

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

		<hr>



		<!-- Copyright -->
		<div class="footer-copyright text-center py-3" style="background-color: #154178;">© 2020 Copyright:
			<a href="{{url('/')}}">Ahmad Rafi Akbar Putra Hamzah</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</body>

</html>