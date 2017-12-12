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

        $totalPrice = CartHeader::getPrice();
        $totalCount = CartHeader::getTotal();

        // Подключаем вид
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

    public function actionSession($product)
    {
        session_start();    
        if(count($_SESSION)>10)
        {
            $array_shift($_SESSION);
        }
        $array_push($_SESSION, "$productId");
    }

    public function viewSession()
    {
        session_start();
        actionSession($product);
    }

}
