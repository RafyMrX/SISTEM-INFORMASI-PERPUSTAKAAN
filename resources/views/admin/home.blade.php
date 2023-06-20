 @extends('admin.template_admin.temp')
@section('title', 'Halaman Dahsboard')
@section('judul_halaman', 'SELAMAT DATANG ADMIN')

@section('isi')

<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Koleksi Buku</h4>
                  </div>
                  <div class="card-body">
                    {{$buku}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                   <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Koleksi Majalah</h4>
                  </div>
                  <div class="card-body">
                      {{$majalah}}

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                     <h4>Total Koleksi Journal</h4>
                  </div>
                  <div class="card-body">
                      {{$jurnal}}
                  </div>
                </div>
              </div>
            </div>
  
          </div>


@endsection

 
