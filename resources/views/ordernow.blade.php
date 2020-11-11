@extends('layouts.master')
@section('content')

<div class="custom-product pt-5">
          <div class="col-sm-10">
          <br>
          <br>
          <table class="table table-dark">
  <tbody>
    <tr>

      <td>Amount</td>
      <td>Rs.{{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>Rs.0</td>
    </tr>
    <tr>
      <td>Delivery Charges</td>
      <td>Rs.150</td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>Rs.{{$total+150}}</td>
    </tr>
  </tbody>
</table>
<form method="POST" action="orderplace">
@csrf
  <div class="form-group">
    <textarea type="text" name="address" placeholder="enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Payment Method</label><br><br>
    <input type="radio" value="online" name="payment"> <span>Online payment</span><br><br>
    <input type="radio" value="cash" name="payment"> <span>Cash On delivery</span><br><br>
    <input type="radio" value="online" name="payment"> <span>Debit Card</span>
  </div>
  
  <button type="submit" class="btn btn-success mb-5">Order Now</button>
</form>
</div>
</div>
@endsection