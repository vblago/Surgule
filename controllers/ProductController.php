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
        $i = count($_SESSION['prodId']) + 1;

        

        $latestProducts = Product::getLatestProducts(12);
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получаем инфомрацию о товаре
        $product = Product::getProductById($productId);

        $totalPrice = CartHeader::getPrice();

        $totalCount = CartHeader::getTotal();



        $productsView = array();

        $productsView['pid'] = $product['id'];

        if((count($_SESSION['prodId'])<=1)&&($productsView['pid']!=$_SESSION['prodId'][$i-1]))
        {
        $_SESSION['prodId'][$i] = $productsView['pid'];
        }

        if(count($_SESSION['prodId'])>1)
        {
            $j=1;
            $counter = 0;

            while ($j <= count($_SESSION['prodId']))
            {
                if($productsView['pid']==$_SESSION['prodId'][$j])
                    {
                        $counter++;
                    }
                    $j++;

            }  
            if($counter<1)
                {
                    // if($i==6)
                    // {
                    //     while
                    // }
                    $_SESSION['prodId'][$i] = $productsView['pid'];
                }

        }

        $i++;
        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

}
