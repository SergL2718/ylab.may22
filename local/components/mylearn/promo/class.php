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
class Promocomponent extends CBitrixComponent
{
    /** @var int $totalCost Минимальная сумма заказа в корзине*/
    private $totalCost = 1500;

    /**
     * Метод executeComponent
     *
     * @return mixed|void
     * @throws \Exception
    */
    public function executeComponent()
    {
        Loader::includeModule('catalog');

        $basket = Basket::loadItemsForFUser(Fuser::getId(), Context::getCurrent()->getSite());

        $this->arResult['BASKET_ITEMS'] = $basket->getBasketItems();

        $this->arResult['IF_PROMO'] = $this->checkIfGivePromo($basket->getPrice());

        $this->includeComponentTemplate();

    }

    /**
     * Определяем может ли пользователь участвовать в промо акции
     * @param float $total
     * @return bool
    */
    public function checkIfGivePromo(float $total): bool
    {
        return $total > $this->totalCost;
    }

}
















