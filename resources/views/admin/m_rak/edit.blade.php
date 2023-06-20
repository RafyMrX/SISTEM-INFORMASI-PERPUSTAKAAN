@extends('admin.template_admin.temp')
@section('title', 'Edit Rak')
@section('judul_halaman', 'Edit Rak')

@section('isi')
@foreach($rak as $item)
     <form action="/rak/edit" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Rak</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="hidden" name="id_rak" value="{{$item->id_rak}}">
                        <input type="text" class="form-control" name="nama" value="{{$item->nama_rak}}"  autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-warning">Edit</button>
                        <a href="{{url('/rak')}}" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
      @endforeach
@endsection
