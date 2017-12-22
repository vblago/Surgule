<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

        <div>
            <table width="780px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Панель адмінів</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/order">Керування категоріями</a></td>
                    <td style="font-size: 30px">Редагувати категорію</td>
                </tr>
            </table>  
        </div>
            <h2>Додати нову категорію</h2>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Назва</p>
                        <input type="text" name="name" placeholder="" value="" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Порядковий номер</p>
                        <input type="text" name="sort_order" placeholder="" value="" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 300px; border-style: none">

                        <p>Статус</p>
                        <select name="status" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 130px; border-style: none;">
                            <option value="1" selected="selected">Відібражається</option>
                            <option value="0">Сховано/option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 100px; border-style: none;">
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

