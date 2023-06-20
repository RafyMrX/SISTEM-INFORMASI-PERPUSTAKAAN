@include('admin.template_admin.header')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('judul_halaman')</h1>
          </div>
          	@yield('isi')
          <div class="section-body">
          </div>
        </section>
      </div>

@include('admin.template_admin.footer')