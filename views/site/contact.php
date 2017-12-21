<?php include ROOT . '/views/layouts/header1.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2 style="margin-top: 15px;">Обратная связь</h2>
                        <h5 style="margin-top: 5px;">Есть вопрос? Напишите нам</h5>
                        <br/>
                        <form action="#" method="post" style="margin-top: 20px;">
                            <p style="margin-top: 20px;">Ваша почта</p>
                            <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                            <p style="margin-top: 20px;">Сообщение</p>
                            <input type="text" name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" style="margin-top: 20px;" class="btn btn-default" value="Отправить" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif; ?>


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>