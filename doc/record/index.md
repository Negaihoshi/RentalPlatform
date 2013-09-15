#index 檔案解析
doctype html 就是 doc type 文件類型是 html。

    <!doctype html>

html 的語言是 zh-tw(正體中文)
    <html lang="zh-tw">

head 瀏覽器讀取的部分，瀏覽者不會看到這些訊息，可以放一些 meta 資料。

\#注意 html 是一種類似 xml 的格式，注意 <head> 一定要搭配 </head> 才行，而內容就是在兩者之間。

    <head>

meta 資料，設定字元編碼為 UTF-8，這邊我建議是不管用哪種語言都用 UTF-8，比較不會有編碼問題。

    <meta charset="UTF-8">

網頁標頭資料，這個會影響到顯示在瀏覽器分頁上的名字。

    <title>RentalPlatform</title>

註解！善用註解可以讓程式碼更好編輯修改。

這邊的內容是說這是最後一個版本的 bootstrap 且是精簡化的版本，其實只是我沒砍掉而以 030。

如何註解！<!-- 中間插入自己的字--> 就可以註解了唷。

    <!-- Latest compiled and minified CSS -->

連結某個檔案用的語法 href 是 Hypertext Reference 的縮寫，是超連結的意思。

rel 是 Relationship 的縮寫，就是說這個連結是樣式表。

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

 跟上面的相同

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

其實下面這個我原本也不知道  查了後才知道的
順便說一下  現在這個網頁是我拿 bootstrap 的模板弄得
這是初始化網頁的設定的 meta 資料
詳細請看 <http://blog.caesarchi.com/2012/05/html-viewport-meta.html>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

meta 其實就是你對檔案右鍵內容，記錄時間、作者等資料的東西。
這邊是我有一個名叫做 author 的 meta 資料，內容是 Negaihoshi。

    <meta name="author" content="Negaihoshi">

這個是跟瀏覽器說，我的網頁 icon 在這邊喔！請讀取他。

    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

跟上面相同，跳過。

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/jumbotron/jumbotron.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

一開就要一關喔，前面用 `<head>`，後面就要用 `</head>` 關閉。

    </head>

這裡是放網頁的主要內容。

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
<form class="navbar-form navbar-right" method="POST" connect="">
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

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
<div class="container">
<h1>Hello, world!</h1>
<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
<p><a class="btn btn-primary btn-lg">Learn more &raquo;</a>
</p>
</div>
</div>

<div class="container">
<!-- Example row of columns -->
<div class="row">
<div class="col-lg-4">
<h2>Heading</h2>
<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
<p><a class="btn btn-default" href="#">View details &raquo;</a>
</p>
</div>
<div class="col-lg-4">
<h2>Heading</h2>
<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
<p><a class="btn btn-default" href="#">View details &raquo;</a>
</p>
</div>
<div class="col-lg-4">
<h2>Heading</h2>
<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
<p><a class="btn btn-default" href="#">View details &raquo;</a>
</p>
</div>
</div>

<hr>

<footer>
<p>&copy; Company 2013</p>
</footer>
</div>
<!-- /container -->

<!-- Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

</body>

</html>
