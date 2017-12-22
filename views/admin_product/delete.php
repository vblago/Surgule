<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

           
            <table width="600px">
                <tr>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin">Панель адмінів</a></td>
                    <td><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/product">Керування товарами</a></td>
                    <td style="font-size: 25px">Видалити товар</td>
                </tr>
            </table>  
        </div>
        <h2>Видалити товар #<?php echo $id; ?></h2>
        <div style="padding-left: 20px; font-size: 20px">
            


            <p style="font-size: 20px">Ви дійсно хочете видалити цей товар?</p>

            <form method="post">
                <input type="submit" name="submit" value="Видалити" style="border-radius: 3px; background-color: #B2B2BC; height: 30px; width: 100px; border-style: none;">
            </form>
        </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

