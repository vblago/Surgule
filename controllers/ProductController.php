<?php

/**
 * Контроллер ProductController
 * Товар
 */
class ProductController
{

    /**
     * Action для страницы просмотра товара
     * @param integer $productId <p>id товара</p>
     */
    public function actionView($productId)
    {
        

        $latestProducts = Product::getLatestProducts(12);
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получаем инфомрацию о товаре
        $product = Product::getProductById($productId);

        $comat =  Product::getCommentsList();
        $resCom=Product::reformArr($comat, $productId);
    
        $totalPrice = CartHeader::getPrice();
        $totalCount = CartHeader::getTotal();

        ProductController::setLastProduct($product);

        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

    public static function setLastProduct($product)
    {
        $i = count($_SESSION['prodId']) + 1;

        $productsView = array();
        $productsView['pid'] = $product['id'];

        if((count($_SESSION['prodId'])<=1)&&($productsView['pid']!=$_SESSION['prodId'][$i-1])){
            $_SESSION['prodId'][$i] = $productsView['pid'];
        }

        if(count($_SESSION['prodId'])>1){
            $j=1;
            $counter = 0;
            while ($j <= count($_SESSION['prodId'])){
                if($productsView['pid']==$_SESSION['prodId'][$j]){
                    $counter++;
                }
                $j++;
            }  
            if($counter<1){
                $_SESSION['prodId'][$i] = $productsView['pid'];
            }
        }
        $i++;
    }

    public function actionCommentCreate($productId)
    {
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы

            $user = $_SESSION['user'];
            $rate = $_POST['rate'];
            $coment = $_POST['coment'];      
            

            Product::createComment($productId, $user, $coment);
            Product::createRate($productId, $user, $rate);

            header("Location: /");   
    } 


        require_once(ROOT . '/views/product/view.php');
        return true; 
    }



}
