<?php include ROOT . '/views/layouts/header.php'; ?>
   
<section>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-2">
                <nav>
                    <ul class="mcd-menu">
                        <?php foreach ($categories as $categoryItem): ?>
                            <li>
                                <a href="/category/<?php echo $categoryItem['id']; ?>" class="<?php if ($categoryItem['id'] == $categoryId) echo active?>">
                                    <strong><?php echo $categoryItem['name']; ?></strong>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $product['name']; ?></h2>
                                    <div class="product-inner-price">
                                        <ins>$<?php echo $product['price']; ?></ins> <del>$<?php echo $product['price']*1.2; ?></del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <a href="/cart/add/<?php echo $product['id']; ?>" class="add_to_cart_button" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p><b>Наличие:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                        <p><b>Производитель:</b> <?php echo $product['brand']; ?></p>
                                        <p><b>Код:</b><?php echo $product['code']; ?></p>
                            
                                        <p id="rate_id" class="rate"><?php echo $product['rate']; ?></p>
                                        <p id="rate_count_id"><?php echo $product['rate_count']; ?></p>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel">
                            <ul class="product-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>


                            <?php if(Product::CommentValidation($resCom)):?><li role="presentation"><a   href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li><?php endif; ?>
                                            
                            </ul>
                            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <h2>Product Description</h2>  
                            <p><?php echo $product['description']; ?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <h2>Оставить отзыв</h2>  
                                <div class="submit-review">
                                    <form action="<?php ProductController::actionCommentCreate($productId); ?>" method="post">
                                        <p><label for="rate">Ваша оценка</label></p>
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="5" name="rate" min="1" max="5" step="0.5">
                                        </div>  
                                        
                                        <p><label for="coment">Ваш отзыв</label></p>
                                        <textarea name="coment" cols="30" rows="10"></textarea>
                                        
                                        <input type="submit" name="submit" class="btn btn-default" value="Отправить отзыв" >

                                    </form>                 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    <div>
                        <h1 align="center">Комментарии</h1>

                            <?php foreach($resCom as $comatItem): ?>
                                 <p>Автор:   
                                <?php 
                                    $p=$comatItem['userid'];
                                    $usn=User::getUserById($p);
                                    echo $usn['name']; 
                                    
                                ?></p>
                                <p style="margin-left: 30px; font-size: 20px;"><?php echo  $comatItem['com']; ?></p>
                            <?php endforeach; ?> 

                    </div>
                    
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <?php foreach(array_reverse($_SESSION['prodId']) as $key => $value) { if(!($value==$productId)): ?>
                                <div class="single-product">    

                                    <div class="product-f-image">
                                    <?php $product = Product::getProductById($value) ?>
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="">  
                                        <div class="product-hover">
                                            <?php $product = Product::getProductById($value) ?>
                                            <a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <?php $product = Product::getProductById($value) ?>
                                            <a href="/product/<?php echo $product['id']; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="/product/<?php echo $product['id']; ?>"><?php $product = Product::getProductById($value); echo $product['name']; echo $value ?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$<?php $product = Product::getProductById($value); echo $product['price']; ?></ins> <del>$<?php $product = Product::getProductById($value); echo $product['price']*1.2; ?></del>
                                        
                                    </div> 
                                   
                                </div>    
                                <?php endif; } ?>
                                                                        
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer.php'; ?>