<?php include ROOT . '/views/layouts/header1.php'; ?>

<section>
    <div class="container">
        <div style="height: 300px; text-align: center;" class="row">
<br/>
            <h1 style="margin-top: 15px;">Кабінет користувача</h1>
           <br/> 
            <h4 style="font-size: 20px;margin-top: 15px;">Привіт, <?php echo $user['name'];?>!</h4>
            <br>
           <p style="font-size: 17px;"><a href="/cabinet/edit" ">Редагувати дані</a></p>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>