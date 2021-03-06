<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register - Lan Kyone(Coming soon)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
<script>
   function checkForm(form)
  {
    if(form.name.value == "") {
      alert("Error: You have a name, right?");
      form.name.focus();
      return false;
    }
    sn = /^[a-zA-Z\s]+$/;
    re = /^\w+$/;
    if(!sn.test(form.name.value)) {
      alert("Error: Your name seems weird. Use only letters and spaces please.");
      form.name.focus();
      return false;
    }
    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(form.pwd1.value.length < 6) {
        alert("Error: Please make a password greater than 6 characters!");
        form.pwd1.focus();
        return false;
      }
      if(form.pwd1.value == form.name.value) {
        alert("Error: You shouldn't use your name as your password!");
        form.pwd1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: Please put at least one number in your password!");
        form.pwd1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: Please put at least one lowercase letter (a-z) in your password!");
        form.pwd1.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.pwd1.value)) {
        alert("Error: Please put at least one uppercase letter (A-Z) in your password!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: We sense that your passwords don't match!");
      form.pwd1.focus();
      return false;
    }
    return true;
  }
</script>

</head>
<body>

  <div class="container"> 
  <br />
  <h2 style="display: table; margin:0 auto;" class="text-info">Register</h2>
  <hr />
    <br />
 
    <form class="form-horizontal" name="register" action={{URL::to('register')}} onsubmit="return checkForm(this);" method="POST">       

      <div class="form-group">
        <input type="hidden" name="_token" value={{csrf_token()}}>
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="Full name" name="name" required />
        </div>
      </div> 
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="nrc" placeholder="NRC or Office ID" name="nrc" required />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="nrc" placeholder="University or organization" name="org" required />
        </div>
      </div>
      <!--<div class="form-group"> 
       <div class="col-sm-6">
      <label class="radio-inline" style="margin-right:70px;">
      <input type="radio" name="optradio" value="Passenger" checked>Passenger
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Driver">Taxi Driver
    </label>
      </div>
      </div>-->
      <div class="form-group">
        <div class="col-sm-12">
          <input type="tel" class="form-control" id="phone" placeholder="Phone number" name="phone" required />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="password" class="form-control" id="pwd1" placeholder="Password" name="pwd1" required />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="password" class="form-control" id="pwd2" placeholder="Confirm password" name="pwd2" required />
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-12">
          <button type="submit" class="btn btn-success btn-block" name="ssubmit">Register</button>
        </div>
      </div>
    </form>
  </div>
<hr />
</body>

</html>