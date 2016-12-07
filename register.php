<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="javascripts/regform.js"></script>
</head>
<body>
<header id="header">
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/home/logo.png" alt="Shop" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                            <li><a href="enter.php"><i class="fa fa-lock"></i> Вход</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="#">Каталог товаров</a></li>
                            <li><a href="#">О магазине</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <div class="signup-form text-center"><!--register form-->
                    <h2>Регистрация на сайте</h2>
                    <form action="app/check.php" name ="container" method="post">
                        <div><input type="text" name="name" placeholder="Имя" value="" /></div>
                        <div><input type="text" name="email" placeholder="E-mail" value="" /></div>
                        <div><input type="password" name="password" placeholder="Пароль" value="" /></div>
                        <div><input type="password" name="password2" placeholder="Подтвердите пароль" value="" /></div>
                        <!--davay<input type="submit" name="send" onsubmit="validate(this.form)" value="Регистрация">-->
                        <input type="submit" name="send" onclick="validate(this.form)" class="btn btn-default" value="Регистрация">
                    </form>
                </div><!--/register form-->
            </div>
        </div>
    </div>
</section>
</body>
</html>
