@extends("master")
@section("content")
<div class="container custom-ordernow">
    
<div class="ordernow-wrapper">
<h2>Result for product search</h2>
    <div class="row">
<div class="col-md-10 offset-1">
<table class="table table-bordered">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$0</td>
      </tr>
      <tr>
        <td>Delivery Charge</td>
        <td>$10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>${{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <form action="/orderplace" method="POST">
  @csrf
  <div class="form-group">
    <textarea type="text" name="address" class="form-control" placeholder="Enter Address"></textarea>
  </div>
  <div class="form-group">
    <label for="payment">Payment Method:</label>
    <input type="radio" class="form-control" value="Online Payment" name="payment"> <span>Online Payment</span> <br><br>
    <input type="radio" class="form-control" value="Emi Payment" name="payment"> <span>EMI Payment</span> <br><br>
    <input type="radio" class="form-control" value="Payment On Delivery" name="payment"> <span>Payment On Delivery</span> <br><br>
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
</div>

</div>
</div>
</div>
@endsection