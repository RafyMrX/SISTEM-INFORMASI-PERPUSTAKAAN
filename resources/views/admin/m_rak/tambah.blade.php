@extends('admin.template_admin.temp')
@section('title', 'Tambah Rak')
@section('judul_halaman', 'Tambah Rak')

@section('isi')
		 <form action="/rak/tambah" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Rak</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{url('/rak')}}" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
@endsection
