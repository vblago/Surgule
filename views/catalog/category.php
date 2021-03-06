<?php include ROOT . '/views/layouts/header.php'; ?>
<section>
    <div style="margin-top: 20px"class="container">
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

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    

                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div style="margin-top:20px;" height='300';" class="single-products">
                                    <div class="productinfo text-center">
                                        <img height='200'  src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                        <h2>$<?php echo $product['price']; ?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                        </p>
                                        <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>До кошика</a>
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