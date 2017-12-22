<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<style type="text/css">
    tr, td{
        padding: 10px;
        padding-left: 10px;   
    }
</style>
<section style="padding-left: 30px">
    <div class="container" >
        <div class="row">

            <br/>

        <div>
            <table width="500px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Панель адмінів</a></td>
                    <td style="font-size: 25px">Керування товарами</td>
                </tr>
            </table>  
        </div>

        <a style="font-size: 25px; text-decoration: none;color: #1D1BBF" href="/admin/product/create" class="btn btn-default back"><img src="/template/images/plus1.jpg" height="15px" width="15px" style="padding-left: 10px">Додати товар</a>
            
        <h2>Список товарів</h2>
        
        <br/>

        <table style="font-family: sans-serif; font-style: oblique; color: #1D1BBF; font-size: 20px " width="100%">
            <tr style="font-family: sans-serif; font-style: oblique; color: black ">
                <th>ID товару</th>
                <th>Код</th>
                <th>Назва товару</th>
                <th>Ціна</th>
                <th></th>
                <th></th>
            </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>  
                        <td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редагувати"><img src="/template/images/pencil.jpg" height="20px" width="20px" style="padding-left: 10px"></a></td>
                        <td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><img src="/template/images/trash.jpg" height="20px" width="20px" style="padding-left: 10px"></a></td>
                    </tr>
                <?php endforeach; ?>
            
        </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

