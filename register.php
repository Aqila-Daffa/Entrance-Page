<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="js/funct.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(184, 233, 238);">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5 mx-auto">
             <div class="card border-0 shadow" style="border-radius: 10%; background:rgb(235, 116, 116); top: 70px;">
                    <div class="d-flex justify-content-center">
                    <div class="user_logo_bord">
                    <div class="d-flex justify-content-center">
                        <img src="img/user.png" class="user_logo" alt="user login image">
                    </div>
                    </div>
                    </div>
              <div class="card-body p-4 bckr">
              <h5 class="card-title text-center mb-4 my-5 fw-normal fs-4">Sign Up</h5>
                <form action="register_auth.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="usName" placeholder="username" required>
                    <label for="usName"><img src="img/usname.svg" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="email" id="eml" placeholder="email" required>
                    <label for="eml"><img src="img/mail.svg" width="18px" height="22px" style="margin-right: 7px; margin-top:-3px;">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Password must contain at least one number and one uppercase and lowercase letter, and at least has 6 until 20 characters" required>
                    <label for="pass"><img src="img/lock.svg" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="conPassword" id="conPass" placeholder="ConfirmPassword" required>
                    <label for="conPass"><img src="img/lock.svg" width="18px" height="20px" style="margin-right: 7px; margin-top:-7px;">Confirm Password</label>
                </div>
                <div class="d-grid mt-4 mb-3">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" onclick="confirmation_function()" type="submit">Sign
                    Up</button>
                </div>
                <div class="text-center">Already had an account? <a href="login.php">Sign In</a></div>
                </form>
              </div>
              </div>
            </div>
        </div>
    </div>
</body>
</html>