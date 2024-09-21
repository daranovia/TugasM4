
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/4.5.2-bootstrap.min.css">

    <style>
        /* Custom CSS to center the form */
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .margin-top{
            margin-top: 180px;
        }
        

    </style>
</head>
<body>
    <div class="container"> 
        <div class="row margin-top">
        <div class="col-md-6 side-image">
                <img src="login.jpg" width="400" height="400">
            </div>
            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="auth.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                            </div>
                        
                            <button type="submit" class="btn btn-primary btn-block" id="login" name="login">Login</button>
                            <div class="form-group mt-4">
                                <div class="text-center">
                                    <span>Don't have an account?</span>
                                    <a href="register.php">Register Here</a>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
