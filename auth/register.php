    <link rel="stylesheet" href="css/4.5.2-bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Custom CSS to center the form */
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .margin-top{
            margin-top: 150px;
        }

        /* Custom CSS for the side image */
        .side-image {
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row margin-top">

            <div class="col-md-6 side-image">
                <img src="../assets/img/register.jpg" width="400" height="400">
            </div>

            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                    <form action="auth.php" method="POST">
                    <div class="form-group">
                                <label for="name">username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                            </div>
                            

                            <button type="submit" class="btn btn-primary btn-block" id="register" name="register" >Register</button>
                            <div class="form-group mt-4">
                                <div class="text-center">
                                    <span>Already have an account?</span>
                                    <a href="login.php">Login Here</a>
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
