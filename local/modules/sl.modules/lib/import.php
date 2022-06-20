<?php

namespace Sl\Modules;

use Bitrix\Main\Localization\Loc;

/**
 * Class Import
 * @package Ylab\Import
 */
class Import
{
    private $moduleId = 'sl.modules';

    /**
     * @return string
     */
    public function getLimitImport(): string
    {
        return Loc::getMessage('SL_MODULES_LIMIT_TEXT') . \COption::GetOptionString($this->moduleId, "limit_to_import", '0');
    }
}