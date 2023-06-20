@extends('admin.template_admin.temp')
@section('title', 'Tambah Kategori')
@section('judul_halaman', 'Tambah Kategori')

@section('isi')
		 <form action="/kategori/tambah" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kategori</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{url('/kategori')}}" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
@endsection
