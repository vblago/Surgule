<?php include ROOT . '/views/layouts/header.php'; ?>
 <div style="overflow: hidden;" >
    <?php $count = 0; 
        foreach ($categories as $categoryItem): 
        $count++; 
        $categoryProducts = Product::getProductsListByCategory($categoryItem['id'], 1);
    ?> 
                                
    
    <div class="col-sm-10 col-sm-offset-1" style="padding-top:40px;  ">  
        <h2 style="padding-left: 20px"><?php echo $categoryItem['name']; ?></h2>             
        <div class="row" style=" border-style: solid; border-width:1px; border-color: grey; margin: 10px; ">
                <?php $counter = 0; foreach ($categoryProducts as $product): $counter++; if($counter == 4)break; ?>
                    <div class="col-md-3" style="border-right-style: solid; margin: 10px; padding: 10px; border-width:1px; border-color: grey; height: 430px;"> 
                        <div>
                            <img src="<?php echo Product::getImage($product['id']); ?>" >
                            <h2>$<?php echo $product['price'];?></h2>
                            <p><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></p>
                                                    
                            <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a> 
                        </div>
                    </div>
                <?php endforeach; ?>
              <a  href="/category/<?php echo $categoryItem['id']; ?>"><img style="padding-top: 215px; margin-left: 80px" src="/template/images/home/right.png" height="50px" width="50px">
              </a>
        </div>       
    </div>                         
    <?php endforeach;?>                   
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>