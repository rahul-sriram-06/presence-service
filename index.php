<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Bootstrap Admin">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, management, responsive, CRM, Projects">
    <meta name="robots" content="noindex, nofollow">
    <title>Navigus Assignment</title>
    <link rel="stylesheet" href="extras/css/bootstrap.min.css">
    <link rel="stylesheet" href="extras/css/font-awesome.min.css">

    <style type="text/css">
    #ui{
        background-color: black;
        padding: 30px;
        margin-top: 150px;
        margin-left: 250px;
        margin-right: 250px;
        border-radius: 10px;
        opacity: 0.8;
        }

    #ui h3,label{
          color: white;
        }
    </style>

</head>

<body class="account-page">
    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">
                <div class="account-box" >
                    <div class="account-wrapper" id="ui">
                        <h3 class="account-title">Login</h3>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="email" name="username" required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary submit-btn" type="submit">Login</button>
                            </div>
                            <div class="row">
                                <a href="signup.php">
                                    New Registration
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="extras/js/jquery-3.2.1.min.js"></script>
    <script src="extras/js/popper.min.js"></script>
    <script src="extras/js/bootstrap.min.js"></script>
    <script src="extras/js/app.js"></script>
    <script src="extras/js/login.js"></script>
</body>

</html>
