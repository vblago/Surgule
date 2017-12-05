<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

           

<div>
            <table width="750px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Админпанель</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/category">Управление категориями</a></td>
                    <td style="font-size: 25px">Редактировать категорию</td>
                </tr>
            </table>  
        </div>

            <h2>Редактировать категорию "<?php echo $category['name']; ?>"</h2>

            <br/>
        <div style="padding-left: 20px; font-size: 25px">
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none;">

                        <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">
                        
                        <p>Статус</p>
                        <select name="status" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 130px; border-style: none;">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
                        </select>

                        <br><br>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 100px; border-style: none;">
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

