
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
		@if(!session()->has('SessionPublic'))
		<div class="col-md-8" >
			<p class="alert alert-warning" style="width: 765px;">Silahkan Login Terlebih Dahulu Sebelum Meminjam</p>
		</div>
		@endif
		@foreach($buku as $item)
		<div class="col-md-8 info-panel">
			<img src="{{asset('storage/'.$item->gambar.'')}}" width="162px" class="float-left mr-3">
			<h4>{{$item->judul}}</h4>
			<table>
				<tr>
					<td><b>pengarang</b></td>
					<td>:</td>
					<td>{{$item->pengarang}}</td>
				</tr>
				<tr>
					<td><b>Penerbit</b></td>
					<td>:</td>
					<td>{{$item->penerbit}}</td>
				</tr>
				<tr>
					<td><b>ISBN</b></td>
					<td>:</td>
					<td>{{$item->isbn}}</td>
				</tr>
				<tr>
					<td><b>Lokasi Rak</b></td>
					<td>:</td>
					<td>{{$item->rak['nama_rak']}}</td>
				</tr>
				<tr>
					<td><b>Jumlah</b></td>
					<td>:</td>
					<td>{{$item->jumlah}}</td>
				</tr>
			</table>
		</div>
	</div>
	<h4>Deskripsi</h4>
	<div class="row">
		<div class="col-md-8 info-panel">
			{{$item->deskripsi}}
		</div>
	</div>

	@if(!session()->has('SessionPublic'))
		<button type="submit" class="btn btn-success disabled">Pinjam Sekarang </button>
	@else
	<form action="/pinjaman/buku" method="POST">
		@csrf
		<input type="text" name="kd_transaksi" value="{{$kode}}">
		<input type="text" name="id_katalog" value="{{$item->id_katalog}}">
		<input type="text" name="id_anggota" value="{{$id_anggota}}">
		<input type="text" name="tgl_pinjam" value="{{date('Y-m-d')}}">
		<input type="text" name="tgl_kembali" value="{{$tgl_kembali}}">

		<button type="submit" class="btn btn-success">Pinjam Sekarang </button>
	</form>
	@endif
		@endforeach

</div>

@endsection