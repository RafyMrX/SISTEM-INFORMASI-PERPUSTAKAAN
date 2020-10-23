@extends('../layout.main')
<!-- End Header -->

@section('title', 'Pendaftaran')
<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">Pendaftaran Anggota</h5>
	</div>
</div>

<div class="container box-usulan">
	<form action="" method="">
		<h5 class="forms-usulan">Data Diri</h5>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputEmail4">No. Identitas </label>
				<select class="form-control" name="kat_identitas">
					<option> KTP/NIK</option>
					<option> NISN (Nomor Induk Siswa Nasional) </option>
				</select>
			</div>
			<div class="form-group col-md-8">
				<label style="color:#eee ;">11</label>
				<input type="text" class="form-control" name="identitas" placeholder="Masukkan No Identitas">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Password</label>
				<input type="Password" class="form-control" name="password" placeholder="Password">
			</div>


		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputEmail4">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputEmail4">Tempat Lahir</label>
				<input type="text" class="form-control" name="tempatl" placeholder="Tempat Lahir">
			</div>
			<div class="form-group col-md-3">
				<label for="inputEmail4">Tanggal Lahir</label>
				<input type="date" class="form-control" id="inputEmail4" name="tgll" placeholder="Tanggal Lahir">
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Jenis Kelamin</label>
				<select class="form-control" name="kat_identitas">
					<option>Laki-laki</option>
					<option>Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Status </label>
				<select class="form-control" name="status">
					<option>PELAJAR</option>
					<option>MAHASISWA</option>
					<option>UMUM</option>
					<option>KARYAWAN</option>
				</select>
			</div>

			<div class="form-group col-md-6">
				<label for="inputEmail4">Pendidikan Terakhir </label>
				<select class="form-control" name="pendidikan">
					<option>SD</option>
					<option>SMP</option>
					<option>SMA/SMK</option>
					<option>D1</option>
					<option>D2</option>
					<option>D3</option>
					<option>S1 / D4</option>
					<option>S2</option>
					<option>S3</option>
				</select>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Pekerjaan</label>
				<input type="text" class="form-control" name="password" placeholder="Pekerjaan">
			</div>

			<div class="form-group col-md-6">
				<label for="inputEmail4">Status Pernikahan</label>
				<select class="form-control" name="sts_pernikahan">
					<option>Belum Menikah</option>
					<option>Menikah</option>
				</select>
			</div>

		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Provinsi</label>
				<input type="text" class="form-control" name="prov" placeholder="Provinsi">
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">kota</label>
				<input type="text" class="form-control" name="kota" placeholder="Kota">
			</div>
		</div>

		<div class="form-row">
			<label>Alamat</label>
			<textarea class="form-control" name="almt"></textarea>
		</div>

		<br>
		<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Kirim</button>
	</form>
</div>


@endsection