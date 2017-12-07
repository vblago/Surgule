<?php include ROOT . '/views/layouts/header.php'; ?>
<section>
    <div style="margin-top: 20px"class="container">
        <div class="row">
          <div class="col-md-2">
                        <?php foreach ($categories as $categoryItem): ?>
                            <a href="/category/<?php echo $categoryItem['id']; ?>">
                                <div id = "category_style" class="panel-heading">
                                    
                                    <h4 class="panel-title">
                                        
                                            <?php echo $categoryItem['name']; ?>
                                        
                                    </h4>

                                </div>
                            </a>    
                       <?php endforeach; ?> 
                </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    

                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div style="height: 400px;"class="single-products">
                                    <div class="productinfo text-center">
                                        <img style="height: 200px"  src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                        <h2>$<?php echo $product['price']; ?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                        </p>
                                        <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>                              
                    
                </div><!--features_items-->
                
                 
            </div>
           
        </div>
        <div class="pagination_icons">
                <!-- Постраничная навигация -->
                <?php echo $pagination->get(); ?>
            </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>