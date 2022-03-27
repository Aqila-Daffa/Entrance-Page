<?php
session_start();
if (!empty($_SESSION['message'])) {
    echo '<h5 class="alert alert-danger message text-center" role="alert"> '.$_SESSION['message'].'</h5>';
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/funct.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(184, 233, 238);">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5 mx-auto">
             <div class="card border-0 shadow" style="border-radius: 10%; background:rgb(235, 116, 116); top: 75px;">
                    <div class="d-flex justify-content-center">
                    <div class="user_logo_bord">
                    <div class="d-flex justify-content-center">
                        <img src="img/user.png" class="user_logo" alt="user login image">
                    </div>
                    </div>
                    </div>
              <div class="card-body p-4 bck">
              <h5 class="card-title text-center mb-4 my-5 fw-normal fs-4">Sign In</h5>
                <form action="login_auth.php" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="eml" placeholder="email">
                    <label for="eml"><img src="img/mail.svg" width="18px" height="22px" style="margin-right: 7px; margin-top:-3px;">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="Pass" placeholder="Password">
                    <label for="Pass"><img src="img/lock.svg" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Password</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                    <label class="form-check-label" for="rememberPasswordCheck">
                    Remember password
                    </label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" onclick="valid_function()" type="submit">Sign
                    in</button>
                </div>
                <div class="my-4 text-center">Don't have an account? <a href="register.php">Sign Up</a></div>
                </form>
              </div>
              </div>
            </div>
        </div>
    </div>
</body>
</html>