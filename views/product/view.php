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
                        <br/>
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
                                <img style="heigth:400px; width:300px;" src="<?php echo Product::getImage($product['id']); ?>" alt="" />
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
                                        <a href="/cart/add/<?php echo $product['id']; ?>" class="add_to_cart_button" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>До кошика</a>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p><b>Наявність:</b> <?php echo Product::getAvailabilityText($product['availability']); ?></p>
                                        <p><b>Виробник:</b> <?php echo $product['brand']; ?></p>
                                        <p><b>Код:</b><?php echo $product['code']; ?></p>
                            
                                        <p><b>Рейтинг:</b><?php if($product['rate']>0): ?>
                                        <?php echo $product['rate']; ?>/5(<?php echo $product['rate_count']; ?>)
                                        <?php else: ?>
                                        Жодногої оцінки досі :\
                                        <?php endif; ?>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" style="padding-top:20px;">
                            <ul class="product-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Трішки опису</a></li>


                            <?php if(Product::CommentValidation($resCom)):?><li role="presentation"><a   href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Залишити відгук</a></li><?php endif; ?>
                                            
                            </ul>
                            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
     
                            <p><?php echo $product['description']; ?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <h2>Ваш відгук</h2>  
                                <div class="submit-review">
                                    <form action="<?php ProductController::actionCommentCreate($productId); ?>" method="post">
                                        <p style="margin-top: 15px;"><label for="rate">Ваша оцінка</label></p>

                                        <div style="margin-bottom:  20px; float: none;" class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="5" name="rate" min="1" max="5" step="0.5">
                                        </div>
                                        <div >
                                        
                                        <p><label for="coment">Ваш відгук</label></p>

                                        </div>
                                        <textarea style="margin-top: 20px;" name="coment" cols="30" rows="10"></textarea>
                                        
                                        
                                        <input type="submit" name="submit" class="btn btn-default" value="Відправити" >


                                    </form>                 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    <div>
                        <h2 align="center">Комментарі</h2>

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
                            <h2 class="related-products-title">Товари, які дивилися</h2>
                            <div class="related-products-carousel">
                                <?php foreach(array_reverse($_SESSION['prodId']) as $key => $value) { if(!($value==$productId)): ?>
                                <div class="single-product">    
                                    <div class="product-f-image">
                                    <?php $product = Product::getProductById($value) ?>
                                        <img style="padding-top:-20px;" src="<?php echo Product::getImage($product['id']); ?>" alt="">  
                                        <div class="product-hover">
                                            <?php $product = Product::getProductById($value) ?>
                                            <a href="/cart/add/<?php echo $product['id']; ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <?php $product = Product::getProductById($value) ?>
                                            <a href="/product/<?php echo $product['id']; ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="/product/<?php echo $product['id']; ?>"><?php $product = Product::getProductById($value); echo $product['name']; ?></a></h2>

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