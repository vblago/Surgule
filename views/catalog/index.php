<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="siteAlign" >
    <div class="container" style="margin-top: 20px">
        <div class="row">


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
                                        
                                        <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>                   

                </div>  
            
            </div>
        </div>
    </div>
</section>



<div class="Vendetta" style="overflow: hidden;">
    <?php $count = 0; 
        foreach ($categories as $categoryItem): 
        $count++; 
        $categoryProducts = Product::getProductsListByCategory($categoryItem['id'], 1);
    ?> 
                                
    <h2 class="title text-center"><?php echo $categoryItem['name']; ?></h2>
                   
    <table style="display: inline; width: 100%; padding-left: 60px; margin-left: 60px;  margin-bottom: 40px;">
        <tr>
            <?php $counter = 0; foreach ($categoryProducts as $product): $counter++; if($counter == 4)break; ?>
                                
            <td style="padding-left: 25px">
                <div style="position: inherit;">
                    
                    <img style="height: 300px; width: 300px" src="<?php echo Product::getImage($product['id']); ?>" >
                    
                    <h2>$<?php echo $product['price'];?></h2>
                        
                        <p>
                            <a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
                        </p>
                                                
                        <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину
                        </a>
                                            
                </div> 
            </td>                            
                                     
            <?php endforeach; ?>
              <td>
                <a href="/category/<?php echo $categoryItem['id']; ?>"><img style="padding-bottom: 100px; padding-left: 15px" src="/template/images/home/arrow12.png" height="50px" width="50px"></a>
            </td>   
        </tr> 
    </table>                      
    <?php endforeach;?>                   

</div>


<?php include ROOT . '/views/layouts/footer.php'; ?>