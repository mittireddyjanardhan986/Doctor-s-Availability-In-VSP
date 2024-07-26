<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registration Project</title>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-md-6 col-xm-12">
              <h1 class="text-center">Sign Up</h1>
            <form action="signup.php" method="post">
              <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" 
                id="name" placeholder="Enter name" autocomplete="off" name="name">
              </div>
              <div class="form-group">
                <label for="phno">phno</label>
                <input type="text" class="form-control" 
                id="phno" placeholder="Enter phno" autocomplete="off" name="phno">
              </div>
              <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" 
                id="email" placeholder="Enter Email" autocomplete="off" name="email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" 
                id="password" placeholder="Enter password" autocomplete="off" name="password">
              </div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" 
                id="cpassword" placeholder="Enter Confirm password" autocomplete="off" name="cpassword">
              </div>
              <button type="submit" class="btn btn-success w-100 my-3" name="signup">Sign up</button>
            </form>
            </div>
            <div class="col-md-6 col-xm-12">
            <h1 class="text-center">Login</h1>
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" 
                id="name" placeholder="Enter name" autocomplete="off" name="name">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" 
                id="password" placeholder="Enter password" autocomplete="off" name="password">
              </div>
              <button type="submit" class="btn btn-success w-100" name="login">Login</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
