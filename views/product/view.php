<?php include ROOT . '/views/layouts/header.php'; ?>

<<<<<<< HEAD
<!--<<<<<<< HEAD-->
=======
>>>>>>> a2a47d5f57e45378bd4bf50c601aaf0af849f76a

    <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Shop</h2>
                        </div>
<<<<<<< HEAD
<!--=======-->
<section>
    <div class="container" style="margin-top: 20px; margin-bottom: 20px">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
<!--                    <h1>single prod</h1>-->
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div  class="panel panel-default">
                                <div id="cat" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
<!-->>>>>>> d383c968f8db705c573e14346764157bf3368f46-->
=======
>>>>>>> a2a47d5f57e45378bd4bf50c601aaf0af849f76a
                    </div>
                </div>
            </div>
        </div> 
        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="left-sidebar">
                                <h2>Каталог</h2>
                                    <div class="panel-group category-products">
                                        <?php foreach ($categories as $categoryItem): ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                                    <?php echo $categoryItem['name']; ?>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
<<<<<<< HEAD
<!--=======-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img  src="<?php echo Product::getImage($product['id']); ?>" alt="" />
<!-->>>>>>> d383c968f8db705c573e14346764157bf3368f46-->
=======
>>>>>>> a2a47d5f57e45378bd4bf50c601aaf0af849f76a
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="product-content-right">
                            <div class="product-breadcroumb">
                                <a href="">Home</a>
                                <a href="">Category Name</a>
                                <a href="">Sony Smart TV - 2015</a>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <img height="350px" width="350px" src="<?php echo Product::getImage($product['id']); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="product-inner">
                                        <h2 class="product-name">Sony Smart TV - 2015</h2>
                                        <div class="product-inner-price">
                                            <?php echo $product['price']; ?>
                                        </div>    
                                        
                                        <form action="" class="cart">
                                            <div class="quantity">
                                                <input type="number" size="4" class="input-text qty text"  value="1" name="quantity" min="1" step="1">
                                            </div>
                                            <button class="add_to_cart_button" type="submit">Add to cart</button>
                                        </form>   
                                        
                                        <div role="tabpanel">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                    <h2>Описание продукта</h2>  
                                                        <?php echo $product['description']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="related-products-wrapper">
                                <h2 class="related-products-title">Related Products</h2>
                                <div class="related-products-carousel">
                                    <?php foreach ($latestProducts as $prod): ?>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="<?php echo Product::getImage($prod['id']); ?>" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

<<<<<<< HEAD
<!--<<<<<< HEAD-->
=======
>>>>>>> a2a47d5f57e45378bd4bf50c601aaf0af849f76a
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$700.00</ins> <del>$800.00</del>
                                        </div> 
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="<?php echo Product::getImage($product['id']); ?>" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>
<<<<<<< HEAD
<!--=======-->
                                <?php if ($product['is_new']): ?>
                                    <img  src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <?php endif; ?>

                                <h2><?php echo $product['name']; ?></h2>
                                <p>Код товара: <?php echo $product['code']; ?></p>
                                <span>
                                    <span>US $<?php echo $product['price']; ?></span>
                                    
                                </span>
                                
                                <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                <p><b>Производитель:</b> <?php echo $product['brand']; ?></p>
                                <p><a href="#" data-id="<?php echo $product['id']; ?>"
                                       class="btn btn-default add-to-cart">
                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                </p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">                                
                        <div class="col-sm-12">
                            <br/>
                            <h5>Описание товара</h5>
                            <?php echo $product['description']; ?>
                        </div>
                    </div>
                </div><!--/product-details-->
<!-->>>>>>> d383c968f8db705c573e14346764157bf3368f46-->
=======
>>>>>>> a2a47d5f57e45378bd4bf50c601aaf0af849f76a

                                        <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                        <div class="product-carousel-price">
                                            <ins>$899.00</ins> <del>$999.00</del>
                                        </div> 
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-3.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

                                        <h2><a href="">Apple new i phone 6</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins> <del>$425.00</del>
                                        </div>                                 
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-4.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

                                        <h2><a href="">Sony playstation microsoft</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$200.00</ins> <del>$225.00</del>
                                        </div>                            
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-5.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

                                        <h2><a href="">Sony Smart Air Condtion</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$1200.00</ins> <del>$1355.00</del>
                                        </div>                                 
                                    </div>
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-6.jpg" alt="">
                                            <div class="product-hover">
                                                <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

                                        <h2><a href="">Samsung gallaxy note 4</a></h2>

                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins>
                                        </div>                            
                                    </div>
                                    <?php endforeach;?>                              
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
<?php include ROOT . '/views/layouts/footer.php'; ?>