@extends('admin.template_admin.temp')
@section('title', 'Tambah Petugas')
@section('judul_halaman', 'Tambah Petugas')

@section('isi')
<form action="/petugas/tambah" method="POST">
  @csrf
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIP</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nip" readonly value="{{$kd_petugas}}">
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama')}}">
              @error('nama')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" value="{{old('username')}}">
              @error('username')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
            <div class="col-sm-12 col-md-7">
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
              @error('password')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Konfirmasi Password</label>
            <div class="col-sm-12 col-md-7">
              <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" >
               @error('password_confirmation')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Simpan</button>
              <a href="{{url('/petugas')}}" class="btn btn-danger">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
