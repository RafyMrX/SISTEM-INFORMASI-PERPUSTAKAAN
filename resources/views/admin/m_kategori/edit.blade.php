@extends('admin.template_admin.temp')
@section('title', 'Edit Kategori')
@section('judul_halaman', 'Edit Kategori')

@section('isi')
@foreach($kategori as $item)
     <form action="/kategori/edit" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kategori</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="hidden" name="id" value="{{$item->id_kategori}}">
                        <input type="text" class="form-control" name="nama" value="{{$item->nama_kategori}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-warning">Edit</button>
                        <a href="{{url('/kategori')}}" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
        @endforeach
@endsection
