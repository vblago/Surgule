<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>
        
        <div>
            <table width="650px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Админпанель</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/product">Управление товарами</a></td>
                    <td style="font-size: 25px">Редактировать товар</td>
                </tr>
            </table>  
        </div>
            <h2>Редактировать товар #<?php echo $id; ?></h2>

            <br/>
        <div style="padding-left: 20px; font-size: 25px">
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Название товара</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Стоимость, $</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Категория</p>
                        <select name="category_id" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 100px; border-style: none">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>

                        <p>Производитель</p>
                        <input type="text" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none" name="brand" placeholder="" value="<?php echo $product['brand']; ?>" >

                        <p>Изображение товара</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="">
                        <br />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 230px; border-style: none;">

                        <p>Детальное описание</p>
                        <textarea name="description" style="border-radius: 3px; background-color: #B2B2BC; height: 100px; width: 300px; border-style: none"><?php echo $product['description']; ?></textarea>
                        
                        <br/><br/>

                        <p>Наличие на складе</p>
                        <select name="availability" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 60px; border-style: none;">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>
                        
                        <p>Новинка</p>
                        <select name="is_new" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 60px; border-style: none;">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>

                        <p>Рекомендуемые</p>
                        <select name="is_recommended" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 60px; border-style: none;">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Да</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                        </select>
                        
                        <br/><br/>

                        <p>Статус</p>
                        <select name="status" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 130px; border-style: none;">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 100px; border-style: none;">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

