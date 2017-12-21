<?php include ROOT . '/views/layouts/header1.php'; ?>

<section>
    <div class="container">
        <div style="height: 300px; text-align: center;" class="row">

            <h2 style="margin-top: 15px;">Кабинет пользователя</h2>
            
            <h4 style="font-size: 20px;margin-top: 15px;">Привет, <?php echo $user['name'];?>!</h4>
            <br>
           <p style="font-size: 17px;"><a href="/cabinet/edit" ">Редактировать данные</a></p>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>