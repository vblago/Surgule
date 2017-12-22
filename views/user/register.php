<?php include ROOT . '/views/layouts/header1.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right" style="height:450px;">
                
                <?php if ($result): ?>
                    <p style="margin-top:15px;font-size:20px;text-align:center;">Вы зареєстровані, вітаємо!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2 class="titleReg">Реєстрація на сайті</h2>
                        <form action="#" method="post" class="formReg">
                            <label>Введіть ваше ім'я:</label><br><input type="text" name="name" placeholder="Ім'я" value="<?php echo $name; ?>"/><br><br>
                            <label>Введіть ваш e-mail:</label><br><input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br><br>
                            <label>Придумайте пароль:</label><br><input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/><br><br>
                            <input type="submit" name="submit" class="btn btn-default" value="Реєстрація" /><br><br>
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