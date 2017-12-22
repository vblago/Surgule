<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<style type="text/css">
    li{
        margin: 10px;
    }
</style>
<section style="padding: 20px;">
    <div align="center" >
    <div class="container">
        <div class="row">
            
            <br/>
            
            <h2 style="color: #1108BE; font-size: 30px">Доброго дня, адміністратор!</h2>
            
            <h4 style="color: #9B1C77; font-size: 25px">Вам доступні такі можливості:</h4>
        <ul type="none">        
            <li><a  href="/admin/product" style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px;">Керування товарами</a><br/></li>
             
            <li><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/category">Керування категоріями</a><br/></li>
            
            <li><a style="text-decoration: none; background-color: #FC4605; color: white; font-size: 25px" href="/admin/order">Керування замовленнями</a></li>
           
         </ul>   
        </div>
    </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

