<?php 
$pinjam = date('Y-m-d');
$tujuh_hari     = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
$kembali        = date("Y-m-d", $tujuh_hari);
$id = explode("/", $buku['id']);
$id = end($id);
?>
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

	<div class="row">
		<div class="col-md-8" >
			<p class="alert alert-warning" style="width: 765px;">Silahkan Login Terlebih Dahulu Sebelum Meminjam</p>
		</div>
		<div class="col-md-8 info-panel">
			<img src="{{$buku['image']}}" width="162px" class="float-left mr-3">
			<h4>{{$buku['judul']}}</h4>
			<table>
				<tr>
					<td><b>pengarang</b></td>
					<td>:</td>
					<td>{{$buku['pengarang']}}</td>
				</tr>
				<tr>
					<td><b>Penerbit</b></td>
					<td>:</td>
					<td>{{$buku['penerbit']}}</td>
				</tr>
				<tr>
					<td><b>ISBN</b></td>
					<td>:</td>
					<td>{{$buku['ISBN']}}</td>
				</tr>
				<tr>
					<td><b>Terbit</b></td>
					<td>:</td>
					<td>{{$buku['Terbit']}}</td>
				</tr>
				<tr>
					<td><b>Lokasi Rak</b></td>
					<td>:</td>
					<td>{{$buku['rak']}}</td>
				</tr>
				<tr>
					<td><b>Jumlah</b></td>
					<td>:</td>
					<td>{{$buku['Jumlah']}}</td>
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
	<form action="{{url('/pinjaman-saya')}}" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{$id}}">
		<input type="hidden" name="tgl_pinjam" value="{{$pinjam}}">
		<input type="hidden" name="tgl_kembali" value="{{$kembali}}">
		<button type="submit" class="btn btn-success">Pinjam Sekarang </button>
	</form>
</div>

@endsection