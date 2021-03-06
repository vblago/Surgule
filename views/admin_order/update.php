<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            
        <div>
            <table width="650px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Панель адмінів</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/order">Керування замовленнями</a></td>
                    <td style="font-size: 25px">Редагувати замовлення</td>
                </tr>
            </table>  
        </div>
            <h2>Редагувати замовлення #<?php echo $id; ?></h2>

            <br/>
        <div style="padding-left: 20px; font-size: 25px">
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Ім'я клієнта</p>
                        <input type="text" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Телефон клієнта</p>
                        <input type="text" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Коментар клієнта</p>
                        <input type="text" name="userComment" placeholder="" value="<?php echo $order['user_comment']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Дата оформлення замовлення</p>
                        <input type="text" name="date" placeholder="" value="<?php echo $order['date']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Статус</p>
                        <select name="status" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 130px; border-style: none;">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Нове замовлення</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обробці</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Доставляється</option>
                            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Закрите</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-default" value="Зберегти" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 100px; border-style: none;">
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

