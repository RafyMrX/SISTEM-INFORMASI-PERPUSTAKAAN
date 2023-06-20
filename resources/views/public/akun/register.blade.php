@extends('../layout.main')
<!-- End Header -->

@section('title', 'Pendaftaran')
<!-- Jumbotron -->
@section('container')
@if ($message = Session::get('berhasil'))
<script type="text/javascript">
	swal("Berhasil Mendaftar", "Klik Tombol Dibawah!", "success");
</script>
@endif
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">Pendaftaran Anggota</h5>
	</div>
</div>

<div class="container box-usulan">
	<form action="/pendaftaran-anggota/kirim" method="POST">
		@csrf
		<input type="hidden" name="kd_anggota" value="{{$kd_anggota}}">
		<h5 class="forms-usulan">Data Diri</h5>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputEmail4">No. Identitas </label>
				<select class="form-control  @error('jen_identitas') is-invalid @enderror" name="jen_identitas">
					<option value="ktp" {{old('jen_identitas') == 'ktp' ? 'selected' : null}}> KTP/NIK</option>
					<option value="nisn" {{old('jen_identitas') == 'nisn' ? 'selected' : null}}> NISN (Nomor Induk Siswa Nasional) </option>
				</select>
			</div>
			<div class="form-group col-md-8">
				<label style="color:#eee ;">11</label>
				<input type="text" class="form-control @error('no_identitas') is-invalid @enderror" name="no_identitas" placeholder="Masukkan No Identitas" value="{{old('no_identitas')}}">
				@error('no_identitas')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="inputEmail4">Username</label>
				<input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{old('username')}}">
				@error('username')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="inputEmail4">Password</label>
				<input type="Password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{old('password')}}">
				@error('password')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-4">
				<label for="inputEmail4">Konformasi Password</label>
				<input type="Password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Konformasi Password">
				@error('password_confirmation')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>


		</div>
		<div class="form-row">
			<div class="form-group col-md-12">
				<label for="inputEmail4">Nama Lengkap</label>
				<input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama Lengkap" value="{{old('nama')}}">
				@error('nama')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="inputEmail4">Tempat Lahir</label>
				<input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" placeholder="Tempat Lahir" value="{{old('tempat_lahir')}}">
				@error('tempat_lahir')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-3">
				<label for="inputEmail4">Tanggal Lahir</label>
				<input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror" id="inputEmail4" name="tgl_lahir" placeholder="Tanggal Lahir" value="{{old('tgl_lahir')}}">
				@error('tgl_lahir')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">Jenis Kelamin</label>
				<select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
					<option value="">- Pilih Jenis Kelamin</option>
					<option value="L" {{old('jenis_kelamin') == 'L' ? 'selected' : null}}>Laki-laki</option>
					<option value="P" {{old('jenis_kelamin') == 'P' ? 'selected' : null}}>Perempuan</option>
				</select>
				@error('jenis_kelamin')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Status </label>
				<select class="form-control @error('status') is-invalid @enderror" name="status">
					<option value="">- Pilih Status -</option>
					<option value="pelajar" {{old('status') == 'pelajar' ? 'selected' : null}}>PELAJAR</option>
					<option value="mahasiswa" {{old('status') == 'mahasiswa' ? 'selected' : null}}>MAHASISWA</option>
					<option value="umum" {{old('status') == 'umum' ? 'selected' : null}}>UMUM</option>
					<option value="karyawan" {{old('status') == 'karyawan' ? 'selected' : null}}>KARYAWAN</option>
				</select>
				@error('status')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="form-group col-md-6">
				<label for="inputEmail4">Pendidikan Terakhir </label>
				<select class="form-control  @error('pendidikan') is-invalid @enderror" name="pendidikan">
					<option value="">- Pilih Pendidikan Terakhir- </option>
					<option value="sd" {{old('pendidikan') == 'sd' ? 'selected' : null}}>SD</option>
					<option value="smp" {{old('pendidikan') == 'smp' ? 'selected' : null}}>SMP</option>
					<option value="sma/smk" {{old('pendidikan') == 'sma/smk' ? 'selected' : null}}>SMA/SMK</option>
					<option value="d1" {{old('pendidikan') == 'd1' ? 'selected' : null}}>D1</option>
					<option value="d2" {{old('pendidikan') == 'd2' ? 'selected' : null}}>D2</option>
					<option value="d3" {{old('pendidikan') == 'd3' ? 'selected' : null}}>D3</option>
					<option value="s1/d4" {{old('pendidikan') == 's1/d4' ? 'selected' : null}}>S1 / D4</option>
					<option value="s2" {{old('pendidikan') == 's2' ? 'selected' : null}}>S2</option>
					<option value="s3" {{old('pendidikan') == 's3' ? 'selected' : null}}>S3</option>
				</select>
				@error('pendidikan')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Pekerjaan</label>
				<input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" placeholder="Pekerjaan" value="{{old('pekerjaan')}}">
				@error('pekerjaan')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

			<div class="form-group col-md-6">
				<label for="inputEmail4">Status Pernikahan</label>
				<select class="form-control @error('hubungan') is-invalid @enderror" name="hubungan">
					<option value="">- Pilih Status Pernikahan -</option>
					<option value="belum menikah" {{old('hubungan') == 'belum menikah' ? 'selected' : null}}>Belum Menikah</option>
					<option value="sudah menikah" {{old('hubungan') == 'sudah menikah' ? 'selected' : null}}>Menikah</option>
				</select>
				@error('hubungan')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>

		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="inputEmail4">Provinsi</label>
				<input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" placeholder="Provinsi" value="{{old('provinsi')}}">
				@error('provinsi')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
			<div class="form-group col-md-6">
				<label for="inputEmail4">kota</label>
				<input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" placeholder="Kota" value="{{old('kota')}}">
				@error('kota')
				<div class="invalid-feedback">
					{{$message}}
				</div>
				@enderror
			</div>
		</div>

		<div class="form-row">
			<label>Alamat</label>
			<textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{old('alamat')}}</textarea>
			@error('alamat')
				<div class="invalid-feedback">
					{{$message}}
				</div>
			@enderror
		</div>

		<br>
		<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Kirim</button>
	</form>
</div>


@endsection