<?php include ROOT . '/views/layouts/header.php'; ?>
 	
	<h1 style="margin: 20px;">Восстановление пароля</h1>
 	
 	<form action="<?php UserController::actionRecovery(); ?>" method="post" style="margin: 30px;">
        <input type="text" name="email" style="width: 300px; margin-bottom: 20px;">
        <p><input type="submit" name="submit" class="btn btn-default" value="Восстановить пароль" ></p>

   	</form>

   			<?php if(mail("dragonwell26@gmail.com", "Eto", "fgskjfsn") ){
   				echo 25;
   			}; ?>
<?php include ROOT . '/views/layouts/footer.php'; ?>