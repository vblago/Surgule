<?php include ROOT . '/views/layouts/header1.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <div class="signup-form"><!--sign up form-->
                    <h2 class="titleLog">Вхід на сайт</h2>
                    <br/>
                    <form action="#" method="post" class="formLog">
                        <label>Введіть ваш e-maіl:</label><br><input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br><br>  
                        <label>Введіть пароль:</label><br><input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/><br>
                        <input type="submit" name="submit" style="margin-top: 20px;" class="btn btn-default" value="Вхід" />
                        <br><br>
                    </form>
                    <div>
                        <a href="/user/recovery/">Забули пароль?</a>
                    </div>
                </div><!--/sign up form-->


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>