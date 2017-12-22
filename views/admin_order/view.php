<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<style type="text/css">
    tr, td{
        padding: 10px;
        padding-left: 10px;   
    }
</style>
<section style="padding-left: 30px">
    <div class="container">
        <div class="row">

            <br/>

            <table width="620px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Панель адмінів</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/order">Керування замовленнями</a></td>
                    <td style="font-size: 25px">Проглядання замовлення</td>
                </tr>
            </table>  
        </div>

            <h2>Проглядання замовлення #<?php echo $order['id']; ?></h2>
            <br/>




            <p style="font-size: 20px">Информація про замовлення</p>

            <table style="font-family: sans-serif; font-style: oblique; color: #1D1BBF; font-size: 20px " width="50%">
                <tr>
                    <td>Номер замовлення</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Ім'я клієнта</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон клієнта</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Коментар клієнта</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клієнта</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус замовлення</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата замовлення</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <p style="font-size: 20px">Товари в замовленні</p>

            <table style="font-family: sans-serif; font-style: oblique; color: #1D1BBF; font-size: 20px " width="50%">
                <tr style="font-family: sans-serif; font-style: oblique; color: black ">
                    <th>ID товару</th>
                    <th>Код товару</th>
                    <th>Назва</th>
                    <th>Ціна</th>
                    <th>Кількість</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

