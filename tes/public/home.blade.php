@extends('../layout.main')
	<!-- End Header -->

@section('title', 'Perpustakaan Surabaya')
	<!-- Jumbotron -->
@section('container')
	<div class="jumbotron jbhome">
		<div class="container">
			<h1 class="display-4">Perpustakaan Kota Surabaya</h1>
			<p class="lead">Perpustakaan ini digunakan untuk fasilitas belajar masyarakat kota Surabaya</p>
		</div>
	</div>
	<!-- Akhir Jumbotron -->

	<!-- Pencarian Katalog -->

	<div class="container justify-content-center box-up">
		<div class="form-row ">
			<div class=" form-group col-md-6">
				<label for="Jenis">Jenis Koleksi</label>
				<select class="form-control shadow-sm" name="jenis_koleksi">
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
						<button class="btn btn-success" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- Akhor Pencarian -->



	<!-- Grid Katalog -->
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-3 mr-3 text-center p-3 box-catalog rounded">
				<a href="{{url('/koleksi-buku')}}" class="links">
					<h5>Buku</h5>
					<img src="{{url('/assets/user/icon/open-book.png')}}" alt="book" width="77">
				</a>
			</div>

			<div class="col-md-3 mr-3 text-center rounded p-3 box-catalog">
				<a href="" class="links">
					<h5>Majalah</h5>
					<img src="{{url('/assets/user/icon/magazine.png')}}" alt="book" width="77">
				</a>
			</div>

			<div class="col-md-3 mr-3 text-center rounded p-3 box-catalog">
				<a href="" class="links">
					<h5>Journal</h5>
					<img src="{{url('/assets/user/icon/journal.png')}}" alt="book" width="77">
				</a>
			</div>
		</div>
		<br>
		<div class="row justify-content-center">
			<div class="col-md-3 mr-3 text-center p-3 box-catalog rounded">
				<a href="" class="links">
					<h5>E-book</h5>
					<img src="{{url('/assets/user/icon/ebook.png')}}" alt="book" width="77">
				</a>
			</div>

			<div class="col-md-3 mr-3 text-center p-3 box-catalog rounded">
				<a href="" class="links">
					<h5>Comic</h5>
					<img src="{{url('/assets/user/icon/comic.png')}}" alt="book" width="77">
				</a>
			</div>

			<div class="col-md-3 mr-3 text-center p-3 box-catalog rounded">
				<a href="" class="links">
					<h5>Novel</h5>
					<img src="{{url('/assets/user/icon/novel.png')}}" alt="book" width="77">
				</a>
			</div>
		</div>
	</div>
@endsection
	<!-- Akhor Grid Katalog -->




	