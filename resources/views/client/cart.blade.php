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
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Beefy Burger</td>
                    <td><span class="get-price">$8</span></td>
                    <td class="check-quantity">
                      <input class="change-quantity" type="number" value="1">
                    </td>
                    <td><span class="show-price">$8</span></td>
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
                    <a class="order-cta text-white" data-toggle="modal" data-target="#exampleModalLong">Confirm</a>
                  </div>
                </div>
              </form>
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
                <a href="orderConfirmation" type="button" class="btn order-cta"> Confirm Order</a>
              </div>
            </div>
          </div>
      </div>
    </div>
@endsection
