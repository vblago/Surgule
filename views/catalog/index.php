<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                   
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div  class="panel panel-default">
                                <div id="cat" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a style="align-self:  center" href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
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


            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>