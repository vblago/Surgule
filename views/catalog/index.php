<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div  class="container" style="margin-top: 20px; width: 100%; padding-left: 100px">
        <div class="row">

           

                <div class="col-md-2">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div id = "category_style" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                       <?php endforeach; ?> 
                </div>


            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    
                    <?php foreach ($latestProducts as $product): ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                                <div class="single-products" style="height: 400px;">
                                    <div class="productinfo text-center" >
                                        <img style="height: 200px" src="<?php echo Product::getImage($product['id']); ?>" >
                                        <h2>$<?php echo $product['price'];?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        
                                        <a href="#" data-id="<?php echo $product['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>                   

                </div><!--features_items-->
                
                
                
                <div class="cattop"><h1>Топ телефоны</h1>
                    <?php foreach ($cat11 as $product): ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                                <div class="single-products" style="height: 400px;">
                                    <div class="productinfo text-center" >
                                        <img style="height: 200px" src="<?php echo Product::getImage($product['id']); ?>" >
                                        <h2>$<?php echo $product['price'];?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        
                                        <a href="#" data-id="<?php echo $product['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    
                    <a href="/category/11">
                        <img src="/template/images/home/arrow1.png" style="height:30px; weight:30px">
                    </a>
                    
                </div>
                
                
                
                <div class="cattop"><h1>Топ ноутбуки</h1>
                    <?php foreach ($cat13 as $product): ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                                <div class="single-products" style="height: 400px;">
                                    <div class="productinfo text-center" >
                                        <img style="height: 200px" src="<?php echo Product::getImage($product['id']); ?>" >
                                        <h2>$<?php echo $product['price'];?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        
                                        <a href="#" data-id="<?php echo $product['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    
                    <a href="/category/13" style="align-items: top">
                        <img src="/template/images/home/arrow1.png" style="height:30px; weight:30px">
                    </a>
                </div>
                
                
                
                <div class="cattop"><h1>Топ планшеты</h1>
                    <?php foreach ($cat14 as $product): ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                                <div class="single-products" style="height: 400px;">
                                    <div class="productinfo text-center" >
                                        <img style="height: 200px" src="<?php echo Product::getImage($product['id']); ?>" >
                                        <h2>$<?php echo $product['price'];?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        
                                        <a href="#" data-id="<?php echo $product['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    
                    <a href="/category/14">
                        <img src="/template/images/home/arrow1.png" style="height:30px; weight:30px">
                    </a>
                    
                </div>
                
                
                
                <div class="cattop"><h1>Топ мониторы</h1>
                    <?php foreach ($cat15 as $product): ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                                <div class="single-products" style="height: 400px;">
                                    <div class="productinfo text-center" >
                                        <img style="height: 200px; align-content: left" src="<?php echo Product::getImage($product['id']); ?>" >
                                        <h2>$<?php echo $product['price'];?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        
                                        <a href="#" data-id="<?php echo $product['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    
                    <a href="/category/15">
                        <img src="/template/images/home/arrow1.png" style="height:30px; weight:30px">
                    </a>
                    
                </div>
                
                
                
                <div><h1>Топ компьютеры</h1>
                    <?php foreach ($cat16 as $product): ?>
                    <div class="col-sm-4">
                        <div  class="product-image-wrapper">
                                <div  class="single-products" style="height: 400px;">
                                    <div  class="productinfo text-center" >
                                        <img style="height: 200px" src="<?php echo Product::getImage($product['id']); ?>" >
                                        <h2>$<?php echo $product['price'];?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        
                                        <a href="#" data-id="<?php echo $product['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    
                    <a href="/category/16">
                        <img src="/template/images/home/arrow1.png" style="height:30px; weight:30px">
                    </a>
                    
                </div>
                
                
                
                <div class="cattop"><p><h1>Топ телевизоры</h1></p>
                    <?php foreach ($cat17 as $product): ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                                <div class="single-products" style="height: 400px;">
                                    <div class="productinfo text-center" >
                                        <img style="height: 200px" src="<?php echo Product::getImage($product['id']); ?>" >
                                        <h2>$<?php echo $product['price'];?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id'];?>">
                                                <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        
                                        <a href="#" data-id="<?php echo $product['id'];?>"
                                           class="btn btn-default add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>В корзину
                                        </a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                
                    <a href="/category/17">
                        <img src="/template/images/home/arrow1.png" style="height:30px; weight:30px">
                    </a>
                
                </div>
                
                

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>