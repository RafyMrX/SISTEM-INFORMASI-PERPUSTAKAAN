@extends('admin.template_admin.temp')
@section('title', 'Edit Koleksi')
@section('judul_halaman', 'Edit Koleksi')

@section('isi')
  @foreach($katalog as $item) 
         <form action="/katalog/edit" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
         <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kode </label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control" name="kode" readonly value="{{$item->id_katalog}}">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cover</label>
          <div class="col-sm-12 col-md-7">
            <img src="{{asset('storage/'.$item->gambar.'')}}" width="100">
            <input type="file" class="form-control" name="cover">
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul </label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{old('judul',$item->judul)}}">

          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pengarang</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control @error('pengarang') is-invalid @enderror" name="pengarang" value="{{$item->pengarang}}">

          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ISBN</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control @error('pengarang') is-invalid @enderror" name="isbn" value="{{$item->isbn}}">

          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penerbit</label>
          <div class="col-sm-12 col-md-7">
            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{$item->penerbit}}">
   
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
          <div class="col-sm-12 col-md-7">
            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{$item->jumlah}}" min="1">

          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">kategori</label>
          <div class="col-sm-12 col-md-7">
            <select class="form-control selectric  @error('kategori') is-invalid @enderror" name="kategori">
              <option value="">- Pilih Kategori -</option>
              @foreach($kategori as $itemkat)
              <option value="{{$itemkat->id_kategori}}" {{old('kategori', $item->id_kategori)== $itemkat->id_kategori ? 'selected' : null }}>{{$itemkat->nama_kategori}}</option>
              @endforeach
            </select>

          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Rak</label>
          <div class="col-sm-12 col-md-7">
            <select class="form-control selectric" name="rak">
              <option>- Pilih Lokasi Rak -</option>
              @foreach($rak as $itemrak)
              <option value="{{$itemrak->id_rak}}" {{old('rak', $item->id_rak)== $itemrak->id_rak ? 'selected' : null }}>{{$itemrak->nama_rak}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
          <div class="col-sm-12 col-md-7">
            <textarea class="textarea form-control @error('desc') is-invalid @enderror" style="width: 100%;height: 142px;" name="desc">{{$item->deskripsi}}</textarea>
          </div>
        </div>
        <div class="form-group row mb-4">
          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
          <div class="col-sm-12 col-md-7">
            <button class="btn btn-warning">Edit</button>
            <a href="{{url('/katalog')}}" class="btn btn-danger">Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
        @endforeach
@endsection
