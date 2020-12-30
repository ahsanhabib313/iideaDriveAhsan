@extends('client.layout.clientPortal')
@section('content')

  <body>
    <div class="container">
      <!-- top section starts -->
      <div class="padding-container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="title">
              <h1>What's New</h1>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-items-center ">
            <div class="sort">
              <div class="product-page-number sm-display-none">
                <p>Showing 1–9 of 130 results</p>
              </div>
              <select class="product-short-select custom-select sm-display-none">
                <option selected>Short by Best Sell</option>
                <option value="1">Short by New Item</option>
                <option value="2">Short by Popularity</option>
                <option value="3">Short by Average review</option>
              </select>
            </div>
            <div class="grid">
              <ul class="view-option d-flex justify-content-end">
                <li class="grid-verti active"><i class="fas fa-grip-vertical"></i></li>
                <li class="grid-hori"><i class="fas fa-grip-horizontal"></i></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="logo d-flex justify-content-end">
              <a href="index.php">
                <img src="{{ asset('frontend_assets') }}/images/iideadrive.png" alt="logo">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- top section ends -->
    </div>
    <!-- food section starts -->
    <section class="food-section mb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 item-container">
                <div class="row">
                  <div class="col-lg-7">
                    <div class="food-img">
                      <img src="{{ asset('frontend_assets') }}/images/food-1.jpg" alt="burger">
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="food-info">
                      <h3>Beefy Burger</h3>
                      <p class="price" id="price">$20</p>
                      <p>The best burger in town. Order now for the ultimate experience</p>
                    </div>
                    <div class="food-cta" id="food-cta">
                      <button class="food-order-btn">
                        <i class="fas fa-shopping-cart"></i> Add
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 item-container">
                <div class="row ">
                  <div class="col-lg-7">
                    <div class="food-img">
                      <img src="{{ asset('frontend_assets') }}/images/food-2.jpg" alt="pizza">
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="food-info">
                      <h3>Pizza Bizz</h3>
                      <p class="price" id="price">$15</p>
                      <p>The ultimate pizza to make an evening great</p>
                    </div>
                    <div class="food-cta" id="food-cta">
                      <button class="food-order-btn">
                        <i class="fas fa-shopping-cart"></i> Add
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-lg-6 col-md-6 col-sm-6 item-container">
                <div class="row ">
                  <div class="col-lg-7">
                    <div class="food-img">
                      <img src="{{ asset('frontend_assets') }}/images/food-3.jpg" alt="sandwich">
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="food-info">
                      <h3>Crackled Sandwich</h3>
                      <p class="price" id="price">$10</p>
                      <p> Piping Hot sandwiches for the hustlers
                      </p>
                    </div>
                    <div class="food-cta" id="food-cta">
                      <button class="food-order-btn">
                        <i class="fas fa-shopping-cart"></i> Add
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 item-container">
                <div class="row ">
                  <div class="col-lg-7">
                    <div class="food-img">
                      <img src="{{ asset('frontend_assets') }}/images/food-4.jpg" alt="smoothie">
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="food-info">
                      <h3>Delish Smooothie</h3>
                      <p class="price" id="price">$5</p>
                      <p>Creamy smoothie on the run</p>
                    </div>
                    <div class="food-cta" id="food-cta">
                      <button class="food-order-btn">
                        <i class="fas fa-shopping-cart"></i> Add
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-4 margin-bottom">
              <div class="col-lg-6 col-md-6 col-sm-6 item-container">
                <div class="row ">
                  <div class="col-lg-7">
                    <div class="food-img">
                      <img src="{{ asset('frontend_assets') }}/images/food-5.jpg" alt="fries">
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="food-info">
                      <h3>French Fries</h3>
                      <p class="price" id="price">$10</p>
                      <p>Fries for the snacks. Order now for the ultimate experience</p>
                    </div>
                    <div class="food-cta" id="food-cta">
                      <button class="food-order-btn">
                        <i class="fas fa-shopping-cart"></i> Add
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 item-container">
                <div class="row ">
                  <div class="col-lg-7">
                    <div class="food-img">
                      <img src="{{ asset('frontend_assets') }}/images/food-6.jpg" alt="chicken">
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="food-info">
                      <h3>Fried Chicken</h3>
                      <p class="price" id="price">$25</p>
                      <p>Spicy fried chicken to make an evening great</p>
                    </div>
                    <div class="food-cta" id="food-cta">
                      <button class="food-order-btn">
                        <i class="fas fa-shopping-cart"></i> Add
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </section>
    <!-- food section ends -->

    <!-- footer componment starts-->
    <div class="footer-component">
      <div class="container-fluid p-fixed">
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="slider-container">
              <div class="row food-slider">
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart.php">
                      <img src="{{ asset('frontend_assets') }}/images/food-10.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart.php">
                      <img src="{{ asset('frontend_assets') }}/images/food-8.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart.php">
                      <img src="{{ asset('frontend_assets') }}/images/food-9.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart.php">
                      <img src="{{ asset('frontend_assets') }}/images/food-11.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart.php">
                      <img src="{{ asset('frontend_assets') }}/images/food-6.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart.php">
                      <img src="{{ asset('frontend_assets') }}/images/food-12.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart.php">
                      <img src="{{ asset('frontend_assets') }}/images/food-2.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart.php">
                      <img src="{{ asset('frontend_assets') }}/images/food-3.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 d-flex align-items-center justify-content-center">
            <div class="drive-in-order" id="d-order">
              <h5 class="text-center">Drive-In-Order</h5>
            </div>
            <div class="drive-in-popup" id="show-popup">
              <div class="pop-up-title">
                <p>Your Order</p>
              </div>
              <div class="pop-up-inner">
                <ul class="grand-total drive-in-total" id="update">
                  <li>Total <span class="drive-in-span">$00</span></li>
                </ul>
                <button class="order-cta">Place Order</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--footer componment ends  -->
@endsection