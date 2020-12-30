@extends('client.layout.clientPortal')
@section('content')

  <body>
    <div class="homepage">
      <a href="index.php">
        <i class="fas fa-arrow-left"></i>
      </a>
    </div>
    <div class="container">
      <!-- top section starts -->
      <div class="padding-container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="title menus">
              <h1>Cart</h1>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="logo d-flex justify-content-end">
              <a href="index.php">
                <img src="{{ asset('frontend_assets') }}/images/iideadrive.png" alt="logo">
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- top section ends -->

      <!-- cart section starts -->
      <section class="cart-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 scroll">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Sl No.</th>
                    <th scope="col">Item</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Beefy Burger</td>
                    <td>$8</td>
                    <td class="check-quantity">
                      <input type="number" value="1">
                    </td>
                    <td>$16</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Pizza Bizz</td>
                    <td>$15</td>
                    <td class="check-quantity">
                      <input type="number" value="1">
                    </td>
                    <td>$30</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Delish Smoothie</td>
                    <td>$20</td>
                    <td class="check-quantity">
                      <input type="number" value="1">
                    </td>
                    <td>$20</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-4 mt">
              <form action="#">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title text-center">Confirm Order Here</h3>
                    <ul class="grand-total">
                      <li>Grand Total <span>$100</span></li>
                    </ul>
                    <button class="order-cta">Confirm</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- cart section ends -->
    </div>
@endsection