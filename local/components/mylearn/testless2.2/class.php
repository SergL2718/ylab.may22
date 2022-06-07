<?php

namespace Mylearn\Components;

use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Bitrix\Sale\Fuser;
use CBitrixComponent;
use Bitrix\Sale\Basket;


/**
 *Class PromoComponent
 *@package Mylearn\Components
 *Компонент отображения списка элементов нашего ИБ
 */
class Promocomponent extends CBitrixComponent //Новый класс наследует от класса CBitrixComponent
{
    /**
     * Метод executeComponent.
     *
     * @return mixed|void
     * @throws \Exception
     */
    public function executeComponent()
    {
        Loader::includeModule('catalog'); //Подключаем модуль "Каталог" и ниже работаем с его методами

        $basket = Basket::loadItemsForFUser(Fuser::getId(), Context::getCurrent()->getSite());

//Применяем цикл 'foreach' для получения в переменную $basket массива полей корзины для выполнения задания

        foreach ($basket as $item) {
            $res [] = array(
                    "ID" => $item->getProductId(),
                    "COUNT" => $item->getQuantity(),
                    "SUM" => $item->getFinalPrice(),
                    "PRICE" => $item->getPrice()
                    );
                 }
/** Применяем цикл 'for' для выборки массива значений, в переменную '$res2', которые удовлетворяют первому условию задания
 'Цена каждой из 3 единиц товара, должна превышать 500 рублей'
 */
        for ($i = 0;(!empty($res[$i]['SUM'])); $i++) {
            if($res[$i]['SUM'] >= 500)
            {
                $res2[] = $res[$i]['SUM'];
                $s++;
            }
        }
/*
    * Создадим условие для проверки массива на соответствие второму условию из задания - 'Должно быть заказано не менее 3-x товаров' и
 * если условие выполняется. Добавим в коризну  товар 'Подарок'
**/

        if($s > 3);{
            $product = array(
                'PRODUCT_ID' => $productId,
                'QUANTITY' => $quantity,
                'PROPS' => array(
                array(
                "NAME" => "Имя свойства",
                "CODE" => "CODE_PROP",
                "VALUE" => "Значение свойства",
                "SORT" => "100",
                     ),
                ),
            );
            $basketResult = \Bitrix\Catalog\Product\Basket::addProduct($product/*, $rewriteFields, $options */);
            if (!$basketResult->isSuccess()){
                //$basketResult->getErrorMessages();
            }
         }

        $this->includeComponentTemplate();
    }
}