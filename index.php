<?php
session_start();

if (isset($_POST['login'])) {
    define('EMAIL', 'admin@gmail.com');
    define('PASSWORD', '123456');

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == EMAIL)
    {
        if($password == PASSWORD)
        {
            $_SESSION['email']= $email;
           header("location: admin.php");

        }else{
            echo 'Password NOt match';
        }
    }else
    {
        echo 'Email Not match';
    }
    // echo '<pre>';
    // print_r($_POST);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
    <title>LogIn System</title>
</head>

<body>
    <!-- <div class="login-box">
        <form action="" method="post">
            <input type="email" placeholder="Email Address" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="Login" name="login">
        </form>
    </div> -->
    <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                 
                  <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                </div>

                <form action="" method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" name="email" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="password" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="login">Log
                      in</button>
                      
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div>

                </form>

              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>