@extends('client.layout.clientPortal')
@section('content')
    <body>
    <div class="homepage">
      <a href="\menu">
        <i class="fas fa-arrow-left"></i>
      </a>
    </div>
    <div class="container">
      <!-- top section starts -->
      <div class="padding-container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-3 col-md-3 col-sm-3 small-device">
            <div class="title menus">
              <h1>Menus</h1>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="logo d-flex justify-content-end">
              <a href="index.php">
                <img src="{{asset('frontend_assets/')}}/images/iideadrive.png" alt="logo">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- top section ends -->

      <!-- menu section starts -->
      <section class="menu-wrapper">
        <div class="container">
          <div class="menu-pagination d-flex justify-content-center  mb-3">
            <div class="row">
              <div class="col-lg-12">
                <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item ">
                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="row">
              @foreach($menus as $menu)
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="menu-img">
                          <a href="\menu">
                              <img src="{{$menu->item_image}}" alt="burger">
                          </a>
                  </div>
                </div>
              @endforeach
    </div>

    </div>
      </section>
      <!-- menu section ends -->


    </div>

@endsection
