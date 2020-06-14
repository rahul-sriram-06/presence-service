<?php
	session_start();
?>

<?php if(isset($_SESSION['user_detail'])): ?>

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
    <link rel="stylesheet" href="extras/css/line-awesome.min.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <a id="toggle_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <div class="page-title-box">
                <h3 id="user-email"></h3>
            </div>
            <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img id="avatar" src="" alt="">
                            <span class="status online"></span>
                        </span>
                        <span id="user-name"></span>
                    </a>
                    <ul class="team-members" id="list-active-user">
                    </ul>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0)" id="logout">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                        <li><a href="javascript:void(0)" id="view-doc">View Doc</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title" id="name"></h3>
                        </div>
                    </div>
                </div>
                <div class ="container-fluid" id="dummy-doc"></div><br>
                <div class ="container-fluid" id="list-log"></div>
            </div>
        </div>
    </div>

    <script src="extras/js/jquery-3.2.1.min.js"></script>
    <script src="extras/js/popper.min.js"></script>
    <script src="extras/js/bootstrap.min.js"></script>
    <script src="extras/js/jquery.slimscroll.min.js"></script>
    <script src="extras/js/app.js"></script>
    <script src="extras/js/home.js"></script>

</body>

</html>
<?php else:
	header("location:error/404.php");
?>
<?php endif; ?>
