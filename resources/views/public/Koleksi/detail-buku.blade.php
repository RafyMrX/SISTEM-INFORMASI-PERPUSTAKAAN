@extends('../layout.main')
	<!-- End Header -->

@section('title', 'Detail Buku')
	<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
  <div class="container jbsub-cn">
    <h5 class="display-4 text-center" style="font-size: 40px;">Detail Buku</h5>
  </div>
</div>

<div class="container">
	<form>
	<div class="row">
		<div class="col-md-8" >
			<p class="alert alert-warning" style="width: 765px;">Silahkan Login Terlebih Dahulu Sebelum Meminjam</p>
		</div>
		<div class="col-md-8 info-panel">
			<img src="{{url('/img/buku/buku1.jpg')}}" width="162px" class="float-left mr-3">
			<h4>Pemrograman Web</h4>
			<table>
				<tr>
					<td><b>pengarang</b></td>
					<td>:</td>
					<td>Rafy Akbar</td>
				</tr>
				<tr>
					<td><b>Penerbit</b></td>
					<td>:</td>
					<td>PT.Telkom Indonesia</td>
				</tr>
				<tr>
					<td><b>ISBN</b></td>
					<td>:</td>
					<td>09753</td>
				</tr>
				<tr>
				<td><b>Terbit</b></td>
					<td>:</td>
					<td>2020</td>
				</tr>
				<tr>
					<td><b>Lokasi Rak</b></td>
					<td>:</td>
					<td>09753</td>
				</tr>
				<tr>
				<td><b>Jumlah</b></td>
					<td>:</td>
					<td>1 Eksemplar</td>
				</tr>
			</table>
		</div>
	</div>
	<h4>Deskripsi</h4>
	<div class="row">
		<div class="col-md-8 info-panel">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
	</div>
		<a href="{{url('/pinjaman')}}" class="btn btn-success">Tambah ke Pinjaman Saya</a>
	</form>
</div>
@endsection