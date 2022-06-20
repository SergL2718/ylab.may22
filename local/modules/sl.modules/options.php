<?php

/** @global CUser $USER */
/** @var CMain $APPLICATION */

if (!$USER->IsAdmin()) {
    return;
}

use Bitrix\Main\Loader;
use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;

$module_id = 'sl.modules';

Loc::loadMessages(__FILE__);

Loader::includeModule($module_id);


$request = Application::getInstance()->getContext()->getRequest();

$aTabs = [
    [
        "DIV" => "sl_modules_tab1",
        "TAB" => Loc::getMessage("SL.MODULES.SETTINGS"),
        "ICON" => "settings",
        "TITLE" => Loc::getMessage("SL.MODULES.TITLE"),
    ],
];

$aTabs[] = [
    'DIV' => 'rights',
    'TAB' => GetMessage('MAIN_TAB_RIGHTS'),
    'TITLE' => GetMessage('MAIN_TAB_TITLE_RIGHTS')
];

$arAllOptions = [
    'main' => [
        // ПРИМЕЧАНИЕ (NOTE)
        ["NOTE", Loc::getMessage("SLMODULE_NOTE"), ''],

        // ПАРОЛЬ (PASSWORD)
        ["OPTION_PASSWORD", Loc::getMessage("SLMODULE_OPTION_PASSWORD"), '', ["password", "11"]],

        // СТРОКА (TEXT)
        ["OPTION_NAME_ONE", Loc::getMessage("SLMODULE_OPTION_NAME_ONE"), '', ['text', '']],

        // МНОГОСТРОЧНЫЙ ТЕКСТ (TEXTAREA)
        ["OPTION_NAME_FIVE", Loc::getMessage("SLMODULE_OPTION_NAME_FIVE"), '', ['textarea', '2', '15']],

        // СТАТИЧЕСКИЙ ТЕКСТ/HTML (STATIC TEXT/HTML)
        ["OPTION_NAME_SIX", Loc::getMessage("SLMODULE_OPTION_NAME_SIX"), Loc::getMessage('SLMODULE_OPTION_NAME_SIX_TEXT'), ['statictext',]],

        // ФЛАГ (CHECKBOX)
        ["OPTION_NAME_TWO", Loc::getMessage("SLMODULE_OPTION_NAME_TWO"), '', ["checkbox", "","enabled"]],

        // SELECTBOX
        ["OPTION_NAME_THREE", Loc::getMessage("SLMODULE_OPTION_NAME_THREE"), 'key_2', [
                "selectbox", [
                        "key_1" => "значение 1","key_2" => "значение 2","key_3" => "значение 3"]
            ]
        ],

        // MULTISELECTBOX
        ["OPTION_NAME_FOUR", Loc::getMessage("SLMODULE_OPTION_NAME_FOUR"), 'key_1 ,key_2', [
            "multiselectbox", [
                "key_1" => "значение 1","key_2" => "значение 2","key_3" => "значение 3"]
             ]
        ],

    ],

];

if (($request->get('save') !== null || $request->get('apply') !== null) && check_bitrix_sessid()) {
    __AdmSettingsSaveOptions($module_id, $arAllOptions['main']);
}

$tabControl = new CAdminTabControl("tabControl", $aTabs);

?>
<form method="post"
      action="<?= $APPLICATION->GetCurPage() ?>?mid=<?= htmlspecialcharsbx($module_id) ?>&lang=<?= LANGUAGE_ID ?>"
      name="sl_modules"><?
    echo bitrix_sessid_post();

    $tabControl->Begin();

    $tabControl->BeginNextTab();

    __AdmSettingsDrawList($module_id, $arAllOptions["main"]);

    $tabControl->BeginNextTab();

    require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/admin/group_rights.php';

    $tabControl->Buttons([]);

    $tabControl->End();
    ?><input type="hidden" name="Update" value="Y"
</form>


