@extends('../layout.main')
<!-- End Header -->

@section('title', 'Anggota Masuk')
<!-- Jumbotron -->
@section('container')
<div class="jumbotron jumbotron-fluid jbsub">
	<div class="container jbsub-cn">
		<h5 class="display-4 text-center" style="font-size: 40px;">Data Peminjaman Koleksi</h5>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h4>Login Angota</h4>
					<hr>
					@if ($message = Session::get('gagal'))
					<div class="alert alert-danger" role="alert">
						{{$message}}
					</div>
					@endif
					<form action="/login/post" method="post">
						@csrf
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="*********">
						</div>
						<span style="font-size: 9pt;color: gray;">Belum Punya Akun ? <a href="{{url('/pendaftaran-anggota')}}">Register</a></span><br><br>
						<button class="btn btn-primary" type="submit">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection