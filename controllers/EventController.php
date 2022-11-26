<?php

/**
 * Контроллер EventController
 * Мероприятие
 */
class EventController
{

    /**
     * Action для страницы просмотра товара
     * @param integer $productId <p>id товара</p>
     */
    public function actionView($productId)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получаем инфомрацию о товаре
        $product = Event::getProductById($productId);

        // Подключаем вид
        require_once(ROOT . '/views/event/view.php');
        return true;
    }

}
