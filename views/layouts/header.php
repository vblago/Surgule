<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eElectronics - HTML eCommerce Template</title>
    
    <!-- Google Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../template/css/owl.carousel.css">
    <link rel="stylesheet" href="../template/css/style.css">
    <link rel="stylesheet" href="../template/css/responsive.css">

    <link rel="stylesheet" href="/template/css/owl.carousel.css">
    <link rel="stylesheet" href="/template/css/style.css">
    <link rel="stylesheet" href="/template/css/responsive.css">
   

    

  </head>
  <body style="padding: 0; margin: 0;">
    <div style="padding: 0px; margin-top: -20px;">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8" >
                    <div class="user-menu">
                        <ul>
                            <?php if(User::isGuest()): ?>
                            <li><a href="/user/login/"><i class="fa fa-user"></i> Логін</a></li>
                            <li><a href="/user/register/"><i class="fa fa-heart"></i>Реєстрация</a></li>
                        <?php else: ?>
                            <li><a href="/cabinet/"><i class="fa fa-heart"></i>Личный кабинет</a></li>
                            <li><a href="/user/logout/"><i class="fa fa-heart"></i>Выход</a></li>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Моя валюта:</span><span class="value"> UAH </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">UAH</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Мова:</span><span class="value"> Українська </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Солов'їна</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    </div>
    <div style="height: 110px" class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="home.php"><span>Jogle</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="/cart/">Cart - <span class="cart-amunt">$ <?php echo $totalPrice;?></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $totalCount;?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row"> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?php if ($aboutPage == "main") echo active?>"><a href="/">Домашня</a></li>
                        <li class="<?php if ($aboutPage == "catalog") echo active?>"><a href="/catalog/">Магазин</a></li>
                        <li class="<?php if ($aboutPage == "contact") echo active?>"><a href="/contacts/">Зворотній зв'язок</a></li>
                        <li class="<?php if ($aboutPage == "about") echo active?>"><a href="/about/">Про нас</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->