@extends('layout')
<h2>Registration Form</h2><br>
@section('content')
<form method="POST" action="submit">
 @csrf
<div class="row">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" name ="fname" class="form-control" id="validationDefault01" value="Mark" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" name ="lname" class="form-control" id="validationDefault02" value="Otto" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text"name ="uname"class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
</div>

  <div class="row">
  <div class="col-12">
  <label for="validationDefault05" class="form-label">Gender</label>
  <div class="form-check form-check-inline">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="inlineRadio1"
    value="M"{{old('gender')=='M'? 'checked':''}}/>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>

<div class="form-check form-check-inline">
  <input
    class="form-check-input"
    type="radio"
    name="gender"
    id="inlineRadio2"
    value="F"{{old('gender')=='F'? 'checked':''}}
  />
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
</div>

   <div class="col-md-6">
    <label for="validationDefault05" class="form-label">email</label>
    <input type="email" name="email" class="form-control" id="validationDefault05" required>
  </div>

<div class="col-md-6">
    <label for="validationDefault05" class="form-label">Mobile No.</label>
    <input type="tel" name="mobile" class="form-control" id="validationDefault05" required  >
  </div>
  </div>

  <div class="col-md-6">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select"  name="state" id="validationDefault04">
      <option selected disabled >Choose...</option>
      <option value="a">A</option>
      <option value="b">B</option>
      <option value="c">C</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="text" name="zip" class="form-control" id="validationDefault05" required>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="form-check">
      <label><input type="checkbox" name="check[]" value="conditions"> Agree to conditions</label>

    <label><input type="checkbox" name="check[]" value="terms">Agree to terms</label>

    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <button class="btn btn-primary" value="submit" type="submit">Submit form</button>
  </div>
</div>
</form>
@endsection
