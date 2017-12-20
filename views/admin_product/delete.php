<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

           
            <table width="600px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Админпанель</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/product">Управление товарами</a></td>
                    <td style="font-size: 25px">Удалить товар</td>
                </tr>
            </table>  
        </div>
        <h2>Удалить товар #<?php echo $id; ?></h2>
        <div style="padding-left: 20px; font-size: 20px">
            


            <p style="font-size: 20px">Вы действительно хотите удалить этот товар?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 100px; border-style: none;">
            </form>
        </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

