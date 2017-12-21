<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
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

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center" style="margin-top: 15px;">Корзина</h2>


                    <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>

                        <p style="font-size: 17px;">Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, $</p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p style="font-size: 16px;">Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p style="font-size: 17px;"><b>Ваше имя</b></p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>
    
                                        <p style="font-size: 17px;"><b>Номер телефона</b></p>
                                        <input type="text" name="userPhone" placeholder="Ваш номер телефона" value="<?php echo $userPhone; ?>"/>

                                        <p style="font-size: 17px;"><b>Комментарий к заказу</b></p>
                                        <input type="text" name="userComment" placeholder="Сообщение" value="<?php echo $userComment; ?>"/>

                                        <br/>
                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>