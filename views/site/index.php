<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Збираємо віночки </h2>
                                                <p>Вам набридло бачити кохану сумною, а тут ще скоро свята Івана-Купала?</p>
                                                <p>Не хвилюйтесь ми зберемо найкращий віночок для вашої дівчини, ще й через полум'я можемо пострибати</p>
                                                <a href="" class="readmore">Дізнатися більше</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Ремонтуємо дошки для серфінгу</h2>
                                                <p>Ви тільки-но з Австралії, а вашу дошку покусала акула, не хвилюйтесь, наші майстри зроблять кращий ремонт вашої дошки за мінімальний строк</p>
                                                <a href="" class="readmore">Дізнатися більше</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Знищуємо бур'ян</h2>
                                                <p>Будинок вашої бабці заріс величезним бур'яном, а у вас знову приступ ліні?</p>
                                                <p>Наші спеціалісти допоможуть вам очистити будинок від зайвої зелені без використання хімічних препаратів</p>
                                                <a href="" class="readmore">Дізнатися більше</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div> <!-- End slider area -->
    

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands</h2>
                        <div class="brand-list">
                            <img src="upload/images/services_logo__1.jpg" alt="">
                            <img src="upload/images/services_logo__2.jpg" alt="">
                            <img src="upload/images/services_logo__3.jpg" alt="">
                            <img src="upload/images/services_logo__4.jpg" alt="">
                            <img src="upload/images/services_logo__1.jpg" alt="">
                            <img src="upload/images/services_logo__2.jpg" alt="">
                            <img src="upload/images/services_logo__3.jpg" alt="">
                            <img src="upload/images/services_logo__4.jpg" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">

                        <?php foreach ($latestProducts as $product): ?>
                            <div class="single-product">
                                <div style="height: 250px" class="product-f-image">
                                    <img style="vertical-align: middle;" src="<?php echo Product::getImage($product['id']); ?>" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single_product.php" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>
                                    <a href="/product/<?php echo $product['id'];?>"><?php echo $product['name'];?></a>
                                </h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$<?php echo $product['price'];?></ins> <del>$<?php echo $product['price']*1.2;?></del>
                                </div> 
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

            <?php $count = 0; 
                foreach ($categories as $categoryItem): 
                $count++; 
                if($count == 4)break;
                $categoryProducts = Product::getProductsListByCategory($categoryItem['id'], 1);
            ?>     
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title"><?php echo $categoryItem['name']; ?></h2>
                        <a href="/category/<?php echo $categoryItem['id']; ?>" class="wid-view-more">View All</a>
                        
                        <?php $counter = 0; foreach ($categoryProducts as $product): $counter++; if($counter == 4)break; ?>
                        <div class="single-wid-product">
                            <img height="100px" width="100px" class="product-thumb" src="<?php echo Product::getImage($product['id']); ?>" alt="">
                            <h2><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h2>
                            <div class="product-wid-price">
                                <ins>$<?php echo $product['price']; ?></ins> <del>$<?php echo $product['price']*1.2; ?></del>
                            </div>                            
                        </div> 


                        <?php endforeach; ?>

                    </div>
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </div> <!-- End product widget area -->

<?php include ROOT . '/views/layouts/footer.php'; ?>