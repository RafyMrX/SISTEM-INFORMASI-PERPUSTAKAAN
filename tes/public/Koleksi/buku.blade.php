@extends('../layout.main')
<!-- End Header -->

@section('title', 'Koleksi Buku Terbaru')
<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">Koleksi Buku Terbaru</h5>
	</div>
</div>

<div class="container">

		@if (Session::has('status'))
		<div class="alert alert-success">
			{{ Session::get('status') }}
		</div>
		@endif

	<div class="row justify-content-center">
		@foreach($buku as $key)		
		<div class="col-md-5 info-panel">
			<img src="{{$key['image']}}" width="162px" class="float-left mr-3">
			<h4><a href="{{$key['id']}}">{{$key['judul']}}</a></h4>
			<table>
				<tr>
					<td><b>pengarang</b></td>
					<td>:</td>
					<td>{{$key['pengarang']}}</td>
				</tr>
				<tr>
					<td><b>Penerbit</b></td>
					<td>:</td>
					<td>{{$key['penerbit']}}</td>
				</tr>
				<tr>
					<td><b>ISBN</b></td>
					<td>:</td>
					<td>{{$key['ISBN']}}</td>
				</tr>
				<tr>
					<td><b>Terbit</b></td>
					<td>:</td>
					<td>{{$key['Terbit']}}</td>
				</tr>
				<tr>
					<td><b>Lokasi Rak</b></td>
					<td>:</td>
					<td>{{$key['rak']}}</td>
				</tr>
				<tr>
					<td><b>Jumlah</b></td>
					<td>:</td>
					<td>{{$key['Jumlah']}}</td>
				</tr>
			</table>
		</div>
		@endforeach



		
	</div>
</div>

@endsection