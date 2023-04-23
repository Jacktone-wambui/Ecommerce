@extends('master')
@section("content")
<div class="custom-product">
 <div class="col-sm-10">
 <table class="table">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>Ksh {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>Ksh 0</td>
      </tr>
      <tr>
        <td>Deliery</td>
        <td>Ksh 200</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>Ksh {{$total+200}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="post">
    @csrf
  <div class="form-group">
    <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method:</label><br><br>
    <input type="radio" value="cash" name="payment">  <span>Online payment</span><br><br>
    <input type="radio" value="cash" name="payment">  <span>EMI payment</span><br><br>
    <input type="radio" value="cash" name="payment">  <span>Payment on delivery</span><br><br>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
  </div>
</div>
</div>
@endsection
