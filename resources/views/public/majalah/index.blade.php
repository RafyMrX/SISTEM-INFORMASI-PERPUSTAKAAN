@extends('../layout.main')
<!-- End Header -->

@section('title', 'Koleksi Majalah Terbaru')
<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">Koleksi Majalah Terbaru</h5>
	</div>
</div>

<div class="container">


	<div class="row justify-content-center">
		@if($jml > 0)
		@foreach($buku as $item)
		<div class="col-md-5 info-panel">
			<img src="{{asset('storage/'.$item->gambar.'')}}" width="162px" class="float-left mr-3">
			<h4><a href="{{url('/majalah/'.$item->id_katalog)}}">{{$item->judul}}</a></h4>
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
@endforeach
@else
<div class="col-md-12 info-panel" style="background-color: #ffdadaee;color:red;">
		<h4 class="text-center">Admin Belum Menambahkan Koleksi Ini</h4>
	</div>
@endif
	</div>
</div>
</div>

@endsection