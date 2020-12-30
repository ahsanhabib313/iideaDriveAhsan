@extends('inc.layout')
@section('content')
    <body>
   <div class="login-wrapper">
        <div class="calc">
  <div class="calc-title">
    <span class="calc-title-span">
      <input type="text" placeholder="Enter driver name">
    </span>
    <p class="mt-2">Enter Pin</p>
  </div>
  <div class="calc-display">
    <div class="calc-display-span secondary-display" id="secondary-display">
      <p></p>
    </div>
    <div class="calc-display-span primary-display" id="display">
    </div>
  </div>
  <div class="calc-display-hr"></div>
  <div class="calc-btn" id="btn">
    <button class="calc-btn-primary" id="seven">1</button>
    <button class="calc-btn-primary" id="eight">2</button>
    <button class="calc-btn-primary" id="nine">3</button>
    <button class="calc-btn-primary" id="four">4</button>
    <button class="calc-btn-primary" id="five">5</button>
    <button class="calc-btn-primary" id="six">6</button>
    <button class="calc-btn-primary" id="one">7</button>
    <button class="calc-btn-primary" id="two">8</button>
    <button class="calc-btn-primary" id="three">9</button>
    <button class="calc-btn-primary" id="zero">0</button>
    <div class="submit-pin">
        <button class="calc-btn-clear" id="clear">clear</button>
        <button class="calc-btn-clear" id="clear">Submit</button>
    </div>
  </div>
</div>

   </div>
@endsection
  