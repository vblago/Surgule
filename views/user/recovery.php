<?php include ROOT . '/views/layouts/header1.php'; ?>
<div class="RecBlock">
	<?php if (isset($errors) && is_array($errors)): ?>
       	<ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
		<h1 class="titleRec" ">Відновлення пароля</h1><br>
	 	
	 	<form action="#" method="post" class="formRec">
	        <label style="font-size: 18px;">Введіть ваш e-mail:</label><br><input type="text" name="email" class="formInp" placeholder="E-mail">
	        <br><br>
	        <p><input type="submit" name="submit" class="btn btn-default" value="Відновити пароль" ></p><br>

	   	</form>	
</div>
<?php include ROOT . '/views/layouts/footer.php'; ?>