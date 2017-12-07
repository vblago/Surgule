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
        <div>
            <table width="500px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Админпанель</a></td>
                    <td style="font-size: 25px">Управление категориями</td>
                </tr>
            </table>  
        </div>
            
            
            <a style="font-size: 25px; text-decoration: none;color: #1D1BBF" href="/admin/category/create" class="btn btn-default back"><img src="/template/images/plus1.jpg" height="15px" width="15px" style="padding-left: 10px">Добавить категорию</a>
            <h2>Список категорий</h2>

            <br/>

        <table style="font-family: sans-serif; font-style: oblique; color: #1D1BBF; font-size: 20px " width="100%">
                <tr style="font-family: sans-serif; font-style: oblique; color: black; ">
                    <th>ID категории</th>
                    <th>Название категории</th>
                    <th>Порядковый номер</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $category): ?>
                    <tr>
                        <td ><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td><?php echo Category::getStatusText($category['status']); ?></td>  
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать"><img src="/template/images/pencil.jpg" height="20px" width="20px" style="padding-left: 10px"></a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить"><img src="/template/images/trash.jpg" height="20px" width="20px" style="padding-left: 10px"></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

