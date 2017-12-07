<?php 
class CartHeader
{
	static function getPrice(){
		// Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых товарах
            $products = Product::getProdustsByIds($productsIds);
            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }else{
        	$totalPrice = 0;
        }
        return $totalPrice;
	}
    
	static function getTotal(){
		// Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();
        $counter = 0;

        if ($productsInCart) {
            // Если в корзине есть товары, получаем полную информацию о товарах для списка
            // Получаем массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых товарах
            $products = Product::getProdustsByIds($productsIds);

            foreach ($products as $product){
                $counter += $productsInCart[$product['id']];
            }
        }else{
            $counter = 0;
        }
        return $counter;
	}
}
 ?>