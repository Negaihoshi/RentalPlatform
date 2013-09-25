<!doctype html>
<html lang="zh-tw" ng-app>

<head>
    <meta charset="UTF-8">
    <title>RentalPlatform</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Negaihoshi">
    <!-- <link rel="shortcut icon" href="../../assets/ico/favicon.png"> -->

    <link href="http://getbootstrap.com/examples/jumbotron/jumbotron.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular.min.js"></script>
    <script src="../js/emailCtrl.js"></script>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">社團</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a>
                    </li>
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a>
                            </li>
                            <li><a href="#">One more separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" method="POST" action="lib/login_connect.php">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <div id="container " class="container" >
        <form class="form-horizontal" role="form" name="myForm" method="post" action="register_check.php" ng-controller="emailCtrl" >
            <fieldset>
                <div class="form-group ">
                    <legend>使用者註冊</legend>
                    <label class=" control-label " for="username">使用者名稱</label>
                    <div class="controls ">
                        <input type="text" class="form-control " id="username" name="username" placeholder="Enter username" ng-model="username" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls" >
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter e-mail" ng-model="email" required>
                        <span class="error" ng-show="myForm.email.$error.required">Required!</span>
                        <span class="error" ng-show="myForm.email.$error.email">Not valid email!</span>
                        <p class="help-block">你的帳戶名稱，用於登入和顯示。</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">密碼</label>
                    <div class="controls">
                        <input type="password" class="form-control" id="pw1" name="pw1" placeholder="Password" ng-model="pw1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password-repeat">重複輸入密碼</label>
                    <div class="controls">
                        <input type="password" class="form-control" id="pw2" name="pw2" placeholder="Repeat Password" ng-model="pw2" required>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">註冊</button>
                </div>
            </fieldset>
        </form>

    </div>


    <!-- Javascript -->

    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

</body>

</html>
