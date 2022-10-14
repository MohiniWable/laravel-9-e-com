@extends('master')
@section("content")

<div class="container custom-login">
<div class="row">
    <div class="col-sm-6 col-sm-offset-4">
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="password">
  </div>
  <div class="form-group">
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    </div>
</div>

</div>

@endsection