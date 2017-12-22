<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>
        
        <div>
            <table width="650px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Панель адмінів</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/product">Керування товарами</a></td>
                    <td style="font-size: 25px">Редагувати товар</td>
                </tr>
            </table>  
        </div>
            <h2>Редагувати товар #<?php echo $id; ?></h2>

            <br/>
        <div style="padding-left: 20px; font-size: 25px">
            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Назва товару</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Код</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Вартість, $</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Категорія</p>
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

                        <p>Виробник</p>
                        <input type="text" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none" name="brand" placeholder="" value="<?php echo $product['brand']; ?>" >

                        <p>Зображення товару</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="">
                        <br />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 230px; border-style: none;">

                        <p>Опис</p>
                        <textarea name="description" style="border-radius: 3px; background-color: #B2B2BC; height: 100px; width: 300px; border-style: none"><?php echo $product['description']; ?></textarea>
                        
                        <br/><br/>

                        <p>Наявність на складі</p>
                        <select name="availability" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 60px; border-style: none;">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        
                        <br/><br/>
                        
                        <p>Новинка</p>
                        <select name="is_new" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 60px; border-style: none;">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        
                        <br/><br/>

                        <p>Рекомендовані</p>
                        <select name="is_recommended" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 60px; border-style: none;">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        
                        <br/><br/>

                        <p>Статус</p>
                        <select name="status" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 130px; border-style: none;">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Відібражається</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Сховано</option>
                        </select>
                        
                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Зберегти" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 100px; border-style: none;">
                        
                        <br/><br/>
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

