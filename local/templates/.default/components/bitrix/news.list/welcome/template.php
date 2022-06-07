<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true){
    die();
}
error_reporting(E_ALL);
mb_internal_encoding('UTF-8');

?>
            <?php
            $iblockID = $arResult['ITEMS'][0]['IBLOCK_ID']; // ID инфоблока
            $elementID = $arResult['ITEMS'][0]['ID']; // ID элемента
            $arOrder = ['ASC']; // сортирока
            $arFilter = ['NAME']; // фильтрация, можно по имени NAME => название
            $arProductsID = [];
            $rsProps = CIBlockElement::GetProperty($iblockID, 320, $arOrder, $arFilter);

            while($arrProps = $rsProps->Fetch()) {
                $arProductsID[] = $arrProps['PROPERTY_VALUE_ID']; // только для примера, фильтр главное правильный был
            }
            ?>

<pre>
    <?=var_dump($arProductsID[2]);?>
</pre>
<div class="news-list">

        <?php foreach($arResult['ITEMS'] as $arItem)
            {?>
        <p class="news-item" id="">
            ФИО клиента:<?=$arItem['PROPERTIES']["LAST_FIRST_NAME"]['VALUE']?>
        </p>
        <p class="news-item" id="">
            Телефон:<?=$arItem['PROPERTIES']["PHONE_NUMBER"]['VALUE']?>
        </p>
        <p class="news-item" id="">
            Город:<?=$arProductsID['CITY']?>
        </p>
        <p class="news-item" id="">
            Улица:<?=$arProductsID['STREET']?><br>
        </p>
        <p class="news-item" id="">
            Номер дома:<?=$arProductsID['HOUSE_NUMBER']?><br>
        </p>
        <p class="news-item" id="">
            Квартира:<?=$arProductsID['APARTMENT']?><br>
        </p>
    <?php }?>

</div>

