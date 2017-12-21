<?php include ROOT . '/views/layouts/header1.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2 class="titleReg">Регистрация на сайте</h2>
                        <form action="#" method="post" class="formReg">
                            <label>Введите ваше имя:</label><br><input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/><br><br>
                            <label>Введите ваш e-mail:</label><br><input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br><br>
                            <label>Придумайте пароль:</label><br><input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/><br><br>
                            <input type="submit" name="submit" class="btn btn-default" value="Регистрация" /><br><br>
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