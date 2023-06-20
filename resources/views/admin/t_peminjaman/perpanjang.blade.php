@extends('admin.template_admin.temp')
@section('title', 'Perpanjangan')
@section('judul_halaman', 'Perpanjang Peminjaman')

@section('isi')
		 <form action="/perpanjangan/post" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Perpanjang Hingga Tanggal</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="hidden" name="kd_transaksi" value="{{$kode}}">
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="tgl_kembali">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{url('/peminjaman')}}" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
@endsection
