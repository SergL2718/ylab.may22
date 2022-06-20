<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

?>
<div>
    <b><?= Loc::getMessage('MYLEARN.PROMO.IF_YES')?></b>
    <?php if ($arResult['IF_PROMO']) { ?>
        <?= Loc::getMessage('MYLEARN.PROMO.YES')?>
    <?php } else { ?>
    <?= Loc::getMessage('MYLEARN.PROMO.NO')?>
    <?php } ?>

</div>

<div class="list">
    <b><?= Loc::getMessage('MYLEARN.PROMO.ITEMS')?></b>
    <?php foreach ($arResult['BASKET_ITEMS'] as $basketItems) { ?>
    <div>
        <p><?= $basketItems->getField('NAME').' - '.$basketItems->getQuantity().'<br />'?></p>
    </div>
    <hr>
    <?php } ?>
</div>

