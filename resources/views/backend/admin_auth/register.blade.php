<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">

<div class="container mt-3 card p-5 mt-5"style="width:400px">
  <h2 class="text-center">Register Form</h2>
  <form action="{{ route('admin.dashboard') }}">
    <div class="mb-3 mt-3">
      <label for="email">Full Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter full name" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Email</label>
      <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="pswd">
    </div>
    <div class="mb-3">
      <label for="pwd">Address</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="pswd" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Mobile</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter mobile" name="pswd" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Image</label>
      <input type="file" class="form-control" id="pwd"  name="pswd" required>
    </div>
   
    <button type="" class="btn btn-primary">Register</button>
    <br>
    <a href="{{ route('admin.login') }}">Back to Login</a>
    
  </form>
</div>

</body>
</html>
