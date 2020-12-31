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
              <h1>Confirmed Order</h1>
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
            <div class="col-lg-12 scroll">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Order Id</th>
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
                    <td class="check-quantity">2</td>
                    <td>$16</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Pizza Bizz</td>
                    <td>$15</td>
                    <td class="check-quantity">2</td>
                    <td>$30</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Delish Smoothie</td>
                    <td>$20</td>
                    <td class="check-quantity">1</td>
                    <td>$20</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <!-- cart section ends -->
      <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Do you want to confirm the order?
              </div>
              <div class="modal-footer">
                <a href="orderConfirmation.php" type="button" class="btn order-cta"> Confirm Order</a>
              </div>
            </div>
          </div>
      </div>
    </div>
@endsection