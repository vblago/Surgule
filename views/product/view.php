<?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<section>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-2">
                        <?php foreach ($categories as $categoryItem): ?>
                            <a class="textHover" href="/category/<?php echo $categoryItem['id']; ?>">
                                <div id = "category_style" class="panel-heading">
                                    
                                    <h4 class="panel-title">
                                        
                                            <?php echo $categoryItem['name']; ?> 
                                        
                                    </h4>

                                </div>
                            </a>    
                       <?php endforeach; ?> 
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">
                                    <?php echo $product['name']; ?>
                                    </h2>
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
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p><?php echo $product['description']; ?></p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <?php foreach($_SESSION['prodId'] as $key => $value) { ?>
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
                                <?php } ?>                            
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer.php'; ?>