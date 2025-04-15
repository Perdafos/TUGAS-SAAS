@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

  @section('header')
    @include('template.sidebar_admin')
  @endsection 

  @section('main')
 
    
      <div id="menu" style="padding-top: 20px;">
        <main>
            <div class="dashboard" style="padding: 10px 60px;">
                <div class="container-fluid px-4">
                  <div class="judul" style="color: #ffffff;">
                    <h1 class="mt-4">
                      Dashboard
                    </h1>
                    <h3>
                      Selamat datang, admin
                    </h3>
                    <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item active" style="color: #ffffff;">
                      Halaman Dashboard untuk Admin Perpustakaan.  
                      </li>
                    </ol>
                  </div>
                  <div class="row d-flex" style="padding-left: 50px; padding-right: 50px;">
                    <div class="row row-cols-1 row-cols-md-3 g-4 d-flex">
                        <div class="card text-bg-primary mb-4 d-flex" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Primary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Secondary card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Danger card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Warning card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card text-bg-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Info card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Light card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                          <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </main>
      </div>

@endsection