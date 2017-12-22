<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="cartSect">
    <div class="    ">
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
                <div class="features_items">
                    <h2 class="title text-center" style="margin-top: 15px;">Кошик</h2><br>
                    
                    <?php if ($productsInCart): ?>
                        <p style="font-size: 18px;">Ви обрали наступне:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Код товару</th>
                                <th>Назва</th>
                                <th>Вартість, $</th>
                                <th>Кількість, шт</th>
                                <th>Видалити</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td> 
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="4">Загальна вартість, $:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        
                        <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформити замовлення</a>
                    <?php else: ?>
                        
                        <img src="/upload/images/products/cart1.png" width="300" height="250" style="margin-left: 30%;">
                        <a style="font-size: 30px;" class="btn btn-default checkout" href="/catalog/"><i class="fa fa-shopping-cart"></i>     Ваш кошик поїв довгоносик, Мілорд.<br> Повернутися к покупкам</a>

                    <?php endif; ?>

                </div>

                
                
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>