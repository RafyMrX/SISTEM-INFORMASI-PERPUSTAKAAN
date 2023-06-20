@extends('../layout.main')
<!-- End Header -->

@section('title', 'Usulan Koleksi')
<!-- Jumbotron -->
@section('container')
<?php 
date_default_timezone_set('Asia/Jakarta');
?>
@if ($message = Session::get('berhasil'))
<script type="text/javascript">
	swal("Usulan Berhasil Dikirim", "Klik Tombol Dibawah!", "success");
</script>
@endif
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">usulan Koleksi</h5>
	</div>
</div>

<div class="container box-usulan">
	<form action="/usulan-koleksi/kirim" method="POST">
		@csrf
		<input type="hidden" name="tgl" value="{{date('d-m-Y, h:i:s')}}">
		<h5 class="forms-usulan">Data Diri</h5>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Nama</label>
				<input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Masukkan Nama Lengkap" value="{{old('nama')}}">
				@error('nama')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Email</label>
				<input type="email" class="form-control  @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Email" name="email" value="{{old('email')}}">
				@error('email')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Pekerjaan</label>
				<input type="text" class="form-control  @error('pekerjaan') is-invalid @enderror" name="pekerjaan" placeholder="Pekerjaan" value="{{old('pekerjaan')}}">
				@error('pekerjaan')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Telp</label>
				<input type="text" class="form-control @error('tlp') is-invalid @enderror" id="inputEmail4" placeholder="Telp" name="tlp" value="{{old('tlp')}}">
				@error('tlp')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
		</div>
		<h5 class="forms-usulan">Usulan Koleksi</h5>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">jenis Koleksi</label>
				<select class="form-control @error('jenis') is-invalid @enderror" name="jenis"> 
					<option value="">- Jenis Koleksi - </option>
					<option value="Buku" {{old('jenis') == 'Buku' ? 'selected' : null}}> Buku</option>
					<option value="Majalah" {{old('jenis') == 'Majalah' ? 'selected' : null}}> Majalah</option>
					<option value="Jurnal" {{old('jenis') == 'Jurnal' ? 'selected' : null}}>Jurnal</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Judul</label>
				<input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="inputEmail4" placeholder="Masukkan Judul" value="{{old('judul')}}">
				@error('judul')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="form-group col-md-6">
				<label for="inputEmail4">Pengarang</label>
				<input type="text" class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" id="inputEmail4" placeholder="Pengarang" value="{{old('pengarang')}}">
				@error('pengarang')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Penerbit</label>
				<input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="inputEmail4" placeholder="Penerbit" value="{{old('penerbit')}}">
				@error('penerbit')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">ISBN</label>
				<input type="text" class="form-control  @error('isbn') is-invalid @enderror" name="isbn" id="inputEmail4" placeholder="ISBN" value="{{old('isbn')}}">
				@error('isbn')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Jumlah</label>
				<input type="number" class="form-control  @error('jml') is-invalid @enderror" name="jml" id="inputEmail4" placeholder="Jumlah" value="{{old('jml')}}">
			</div>
			@error('jml')
			<div class="invalid-feedback">
				{{$message}}
			</div>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Kirim</button>
	</form>
</div>


@endsection