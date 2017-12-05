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
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Админпанель</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/order">Управление заказами</a></td>
                    <td style="font-size: 25px">Просмотр заказа</td>
                </tr>
            </table>  
        </div>

            <h2>Просмотр заказа #<?php echo $order['id']; ?></h2>
            <br/>




            <p style="font-size: 20px">Информация о заказе</p>

            <table style="font-family: sans-serif; font-style: oblique; color: #1D1BBF; font-size: 20px " width="50%">
                <tr>
                    <td>Номер заказа</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Имя клиента</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон клиента</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Комментарий клиента</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клиента</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус заказа</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата заказа</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <p style="font-size: 20px">Товары в заказе</p>

            <table style="font-family: sans-serif; font-style: oblique; color: #1D1BBF; font-size: 20px " width="50%">
                <tr style="font-family: sans-serif; font-style: oblique; color: black ">
                    <th>ID товара</th>
                    <th>Артикул товара</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
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

