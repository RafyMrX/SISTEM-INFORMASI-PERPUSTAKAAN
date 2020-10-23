@extends('../layout.main')
<!-- End Header -->

@section('title', 'Usulan Koleksi')
<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">usulan Koleksi</h5>
	</div>
</div>

<div class="container box-usulan">
	<form action="" method="">
		<h5 class="forms-usulan">Data Diri</h5>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Nama</label>
				<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Email</label>
				<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Pekerjaan</label>
				<input type="text" class="form-control" name="nama" placeholder="Pekerjaan">
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Telp</label>
				<input type="text" class="form-control" id="inputEmail4" placeholder="Telp">
			</div>
		</div>
		<h5 class="forms-usulan">Usulan Koleksi</h5>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">jenis Koleksi</label>
				<select class="form-control">
					<option>- Jenis Koleksi - </option>
					<option> Buku</option>
					<option> Majalah  </option>
					<option>Jurnal  </option>
					<option> E-book  </option>
					<option> Komik  </option>
					<option> Novel  </option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Judul</label>
				<input type="text" class="form-control" name="judul" id="inputEmail4" placeholder="Masukkan Judul">
			</div>

			<div class="form-group col-md-6">
				<label for="inputEmail4">Pengarang</label>
				<input type="text" class="form-control" name="judul" id="inputEmail4" placeholder="Pengarang">
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Penerbit</label>
				<input type="text" class="form-control" name="judul" id="inputEmail4" placeholder="Penerbit">
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">ISBN</label>
				<input type="text" class="form-control" name="judul" id="inputEmail4" placeholder="ISBN">
			</div>
				<div class="form-group col-md-6">
				<label for="inputEmail4">Jumlah</label>
				<input type="text" class="form-control" name="judul" id="inputEmail4" placeholder="Jumlah">
			</div>
		</div>
		<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Kirim</button>
	</form>
</div>


@endsection