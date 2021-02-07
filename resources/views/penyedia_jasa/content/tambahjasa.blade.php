@extends('penyedia_jasa.layouts.master')
@section('title', 'Tambah Usaha')

@section('content')

<div class="header pb-6 d-flex align-items-center" style="min-height: 500px;">
      <!-- Mask -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Tambah Jasa </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Tambah Jasa atau Keahlian yang Anda Miliki</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Nama Jasa</label>
                        <input id="input-address" class="form-control" placeholder="Apa yang bisa anda tawarkan..." type="text">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Description -->
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Deskripsi</label>
                    <textarea rows="4" class="form-control" placeholder="Deskripsi ..."></textarea>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Gambar</label>
                        <input id="input-address" class="form-control" placeholder="Home Address" value="" type="file">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Kategori Jasa</label>
                        <input id="input-address" class="form-control" placeholder="Kategori Jasa Anda..." type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Harga</label>
                        <input id="input-address" class="form-control" placeholder="Harga..." type="number">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="#!" class="btn btn-sm btn-primary"> Tambah Jasa</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
        </div>
      </footer>
@endsection