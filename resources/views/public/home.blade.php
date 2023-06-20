@extends('../layout.main')
	<!-- End Header -->

@section('title', 'Perpustakaan Surabaya')
	<!-- Jumbotron -->
@section('container')
	<div class="jumbotron jbhome">
		<div class="container">
			<h1 class="display-4">Perpustakaan SMK Wachid Hasyim Surabaya</h1>
			<p class="lead">Perpustakaan ini digunakan untuk fasilitas belajar siswa/siswi SMK Wachid Hasyim</p>
		</div>
	</div>
	<!-- Akhir Jumbotron -->

	<!-- Pencarian Katalog -->

	<div class="container justify-content-center box-up">
		<form action="/cari" method="GET">
		<div class="form-row ">
			<div class=" form-group col-md-6">
				<label for="Jenis">Jenis Koleksi</label>
				<select class="form-control shadow-sm @error('jenis_koleksi') is-invalid @enderror" name="jenis_koleksi">
					<option value="">- Pilih Jenis Koleksi -</option>
					@foreach($kategori as $item)
						<option value="{{$item->id_kategori}}">{{$item->nama_kategori}}</option>
					@endforeach
				</select>
			</div>
			<div class=" form-group col-md-6">
				<label for="Jenis">Kriteria</label>
				<select class="form-control @error('kriteria') is-invalid @enderror" name="kriteria">
					<option value="">- Pilih Kriteria -</option>
					<option value="judul">Judul</option>
					<option value="pengarang">Pengarang</option>
					<option value="isbn">ISBN</option>
				</select>
			</div>

			<div class=" form-group col-md-12">
				<div class="input-group">
					<input type="text" name="kunci" class="form-control @error('kunci') is-invalid @enderror" placeholder="Masukkan Kata Kunci">
					<div class="input-group-append">
						<button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>

		</div>
	</form>
	</div>
	<!-- Akhor Pencarian -->



	<!-- Grid Katalog -->
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-3 mr-3 text-center p-3 box-catalog rounded">
				<a href="{{url('/buku')}}" class="links">
					<h5>Buku</h5>
					<img src="{{url('/assets/user/icon/open-book.png')}}" alt="book" width="77">
				</a>
			</div>

			<div class="col-md-3 mr-3 text-center rounded p-3 box-catalog">
				<a href="{{url('/majalah')}}" class="links">
					<h5>Majalah</h5>
					<img src="{{url('/assets/user/icon/magazine.png')}}" alt="book" width="77">
				</a>
			</div>

			<div class="col-md-3 mr-3 text-center rounded p-3 box-catalog">
				<a href="{{url('/jurnal')}}" class="links">
					<h5>Journal</h5>
					<img src="{{url('/assets/user/icon/journal.png')}}" alt="book" width="77">
				</a>
			</div>
		</div>
		
		</div>
	</div>
@endsection
	<!-- Akhor Grid Katalog -->




	