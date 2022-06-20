<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Sl\Modules\Import;
use Bitrix\Main\Loader;


/**
 * Class SlModules
 */
class SlModulesComponent extends CBitrixComponent
{
    /**
     * @return mixed|void
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public function executeComponent()
    {
        Loader::includeModule('sl.modules');

        $profile = new Import();

        $this->arResult['LIMIT'] = $profile->getLimitImport();

        $this->includeComponentTemplate();
    }
}