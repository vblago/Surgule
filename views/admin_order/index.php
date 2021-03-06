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
                        
            <table width="450px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Панель адмінів</a></td>
                    <td style="font-size: 25px">Керування замовленнями</td>
                </tr>
            </table>  
        </div>
            <h2>Список засовлень</h2>

            <br/>

            
            <table style="font-family: sans-serif; font-style: oblique; color: #1D1BBF; font-size: 20px " width="100%">
            <tr style="font-family: sans-serif; font-style: oblique; color: black ">
                    <th>ID засовлення</th>
                    <th>Ім'я покупця</th>
                    <th>Телефон покупця</th>
                    <th>Дата оформлення</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>" style="font-family: sans-serif; font-style: oblique; color: #1D1BBF; font-size: 20px; text-decoration: none;">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Дивитися"><img src="/template/images/eye.png" height="20px" width="20px" style="padding-left: 10px"></a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редагувати"><img src="/template/images/pencil.jpg" height="20px" width="20px" style="padding-left: 10px"></a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Видалити"><img src="/template/images/trash.jpg" height="20px" width="20px" style="padding-left: 10px"></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

