@extends('client.layout.clientPortal')
@section('content')

  <body>
    <div class="container-fluid">
      <!-- top section starts -->
      <div class="padding-container tills-padding">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="title">
              <h1>Page 1/5</h1>
            </div>
          </div>
          <div class="col-lg-6">
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
    <hr>
    <!-- food section starts -->
    <section class="food-section mb-5">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <table class="table ">
                    <thead class="scroll">
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col" class="box-width">Quantity</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        
                        <td>Beefy Burger</td>
                        <td class="check-quantity">2</td>
                        <td>$8</td>
                        <td>$16</td>
                    </tr>
                    <tr>
                    
                        <td>Pizza Bizz</td>
                        <td class="check-quantity">2</td>
                        <td>$15</td>
                        <td>$30</td>
                    </tr>
                    <tr>
                        <td>Delish Smoothie</td>
                        <td class="check-quantity">1</td>
                        <td>$20</td>
                        <td>$20</td>
                    </tr>
                    <tr>
                        <td>Crackled Sandwich</td>
                        <td class="check-quantity">2</td>
                        <td>$10</td>
                        <td>$20</td>
                    </tr>
                    <tr>
                        <td>Pizza Bizz</td>
                        <td class="check-quantity">1</td>
                        <td>$100</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><h5>Subtotal</h5></td>
                        <td><h5>$189</h5></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Vat</td>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><h5>Grand Total</h5></td>
                        <td ><h5>$196</h5></td>
                    </tr>
                    </tbody>
              </table>
              <div class="tills-order">
                  <button class="btn btn-danger"> Cancel Order</button>
                  <button class="btn btn-info"> Hold Order</button>
                  <button class="btn btn-primary"> Deliver Order</button>
              </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="tills-container">
                            <div class="tills-food-img">
                                <img src="{{ asset('frontend_assets') }}/images/food-10.jpg" alt="burger" class="no-border-radius">
                            </div>
                            <div class="food-info tills-food-info">
                                <h3>Croissant</h3>
                                <p class="price" id="price">$10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="tills-container">
                            <div class="tills-food-img">
                                <img src="{{ asset('frontend_assets') }}/images/food-1.jpg" alt="burger" class="no-border-radius">
                            </div>
                             <div class="food-info tills-food-info">
                                <h3>Beefy Burger</h3>
                                <p class="price" id="price">$20</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="tills-container">
                            <div class="tills-food-img">
                                <img src="{{ asset('frontend_assets') }}/images/food-5.jpg" alt="burger" class="no-border-radius">
                            </div>
                             <div class="food-info tills-food-info">
                                <h3>French fries</h3>
                                <p class="price" id="price">$5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="tills-container">
                            <div class="tills-food-img">
                                <img src="{{ asset('frontend_assets') }}/images/food-8.jpg" alt="burger" class="no-border-radius">
                            </div>
                             <div class="food-info tills-food-info">
                                <h3>Pasta</h3>
                                <p class="price" id="price">$25</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- food section ends -->

    <!-- footer componment starts-->
    <div class="footer-component">
      <div class="container-fluid p-fixed">
        <div class="row">
          <div class="col-lg-12 col-md-9 col-sm-9">
            <div class="slider-container">
              <div class="row food-slider">
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart">
                      <img src="{{ asset('frontend_assets') }}/images/food-10.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart">
                      <img src="{{ asset('frontend_assets') }}/images/food-8.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart">
                      <img src="{{ asset('frontend_assets') }}/images/food-9.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart">
                      <img src="{{ asset('frontend_assets') }}/images/food-11.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart">
                      <img src="{{ asset('frontend_assets') }}/images/food-6.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart">
                      <img src="{{ asset('frontend_assets') }}/images/food-12.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart">
                      <img src="{{ asset('frontend_assets') }}/images/food-2.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="food-img ">
                    <a href="cart">
                      <img src="{{ asset('frontend_assets') }}/images/food-3.jpg" alt="burger" class="no-border-radius">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--footer componment ends  -->
@endsection