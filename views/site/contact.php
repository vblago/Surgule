<?php include ROOT . '/views/layouts/header1.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>Повідомлення відправлено! ми відповімо вам на вказаний e-mail.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                    <br/>
                        <h2 style="margin-top: 15px;">Зворотній зв'язок</h2>
                        <h5 style="margin-top: 5px; color: #7c7777;font-style:italic">Є питання? Напишіть</h5>
                        <br/>
                        <form action="#" method="post" style="margin-top: 20px;">
                            <p style="margin-top: 20px;">Ваша пошта</p>
                            <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                            <p style="margin-top: 20px;">Повідомлення</p>
                            <input type="text" name="userText" placeholder="Повідомлення" value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" style="margin-top: 20px;" class="btn btn-default" value="Відправити" />
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