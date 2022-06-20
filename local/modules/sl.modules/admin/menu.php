<?php

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

AddEventHandler('main', 'OnBuildGlobalMenu', 'SlModulesModuleMenu');

if (!function_exists('SlModulesModuleMenu')) {
    /**
     * Отображение меню
     * @param $adminMenu
     * @param $moduleMenu
     */
    function SlModulesModuleMenu(&$adminMenu, &$moduleMenu)

    {
        $adminMenu['global_menu_services']['items'][] = [
            'section' => 'sl-modules-pages',
            'sort' => 110,
            'text' => Loc::getMessage('SL_MODULES_TITLE_PAGE'),
            'items_id' => 'nlmk-hidden-pages',
            'items' => [
                [
                    'parent_menu' => 'sl-modules-pages',
                    'section' => 'sl-modules-pages-list',
                    'sort' => 500,
                    'url' => 'sl.modules_list.php?lang=' . LANG,
                    'text' => Loc::getMessage('SL_MODULES_LIST_PAGE'),
                    'title' => Loc::getMessage('SL_MODULES_LIST_PAGE'),
                    'icon' => 'form_menu_icon',
                    'page_icon' => 'form_page_icon',
                    'items_id' => 'sl-modules-pages-list'
                ],
                [
                    'parent_menu' => 'sl-modules-pages',
                    'section' => 'sl-modules-pages-start',
                    'sort' => 500,
                    'url' => 'sl.modules_start.php?lang=' . LANG,
                    'text' => Loc::getMessage('SL_MODULES_START_PAGE'),
                    'title' => Loc::getMessage('SL_MODULES_START_PAGE'),
                    'icon' => 'form_menu_icon',
                    'page_icon' => 'form_page_icon',
                    'items_id' => 'sl-modules-pages-start'
                ]
            ]

        ];
    }
}