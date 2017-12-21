<?php include ROOT . '/views/layouts/header1.php'; ?>
		<h1 class="titleRec" ">Восстановление пароля</h1>
	 	
	 	<form action="<?php UserController::actionRecovery(); ?>" method="post" class="formRec">
	        <input type="text" name="email" class="formInp">
	        <p><input type="submit" name="submit" class="btn btn-default" value="Восстановить пароль" ></p>

	   	</form>	
<?php include ROOT . '/views/layouts/footer.php'; ?>