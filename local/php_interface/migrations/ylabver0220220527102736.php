<?php

namespace Sprint\Migration;

class ylabver0220220527102736 extends Version
{
    protected $description = "Миграция для создания полей свойств, 2-x ИБ 'Контакты', 'Адреса'";

    protected $moduleVersion = "4.0.6";

    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId1 = $helper->Iblock()->getIblockIdIfExists('adress','user_contacts' );
        $iblockId2 = $helper->Iblock()->getIblockIdIfExists('contacts','user_contacts' );


        $helper->Iblock()->addPropertyIfNotExists($iblockId1, [
            'NAME' => 'Город',
            'ACTIVE' => 'Y',
            'SORT' => '10',
            'CODE' => 'CITY',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'S',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);
        $helper->Iblock()->addPropertyIfNotExists($iblockId1, [
            'NAME' => 'Улица',
            'ACTIVE' => 'Y',
            'SORT' => '20',
            'CODE' => 'STREET',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'S',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);
        $helper->Iblock()->addPropertyIfNotExists($iblockId1, [
            'NAME' => 'Номер дома',
            'ACTIVE' => 'Y',
            'SORT' => '30',
            'CODE' => 'HOUSE_NUMBER',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'N',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);
        $helper->Iblock()->addPropertyIfNotExists($iblockId1, [
            'NAME' => 'Квартира',
            'ACTIVE' => 'Y',
            'SORT' => '40',
            'CODE' => 'APARTMENT',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'N',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);
        $helper->Iblock()->addPropertyIfNotExists($iblockId2, [
            'NAME' => 'ФИО',
            'ACTIVE' => 'Y',
            'SORT' => '10',
            'CODE' => 'LAST_FIRST_NAME',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'S',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);
        $helper->Iblock()->addPropertyIfNotExists($iblockId2, [
            'NAME' => 'Котнактный телефон',
            'ACTIVE' => 'Y',
            'SORT' => '20',
            'CODE' => 'PHONE_NUMBER',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'S',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
        ]);
        $helper->Iblock()->addPropertyIfNotExists($iblockId2, [
            'NAME' => 'Адрес',
            'ACTIVE' => 'Y',
            'SORT' => '20',
            'CODE' => 'ADDRESS',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'E',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => null,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '2',
            'USER_TYPE' => null,
            'USER_TYPE_SETTINGS' => null,
            'HINT' => '',
            'FEATURES' =>
                array (
                    0 =>
                        array (
                            'MODULE_ID' => 'iblock',
                            'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
                            'IS_ENABLED' => 'N',
                        ),
                    1 =>
                        array (
                            'MODULE_ID' => 'iblock',
                            'FEATURE_ID' => 'LIST_PAGE_SHOW',
                            'IS_ENABLED' => 'Y',
                        ),
                ),
        ]);

    }

    public function down()
    {

        $helper = $this->getHelperManager();
        $iblockId1 = $helper->Iblock()->getIblockIdIfExists('adress','user_contacts' );
        $iblockId2 = $helper->Iblock()->getIblockIdIfExists('contacts','user_contacts' );


        $helper->Iblock()->deletePropertyIfExists($iblockId1, 'CITY');
        $helper->Iblock()->deletePropertyIfExists($iblockId1, 'STREET');
        $helper->Iblock()->deletePropertyIfExists($iblockId1, 'HOUSE_NUMBER');
        $helper->Iblock()->deletePropertyIfExists($iblockId1, 'APARTMENT');

        $helper->Iblock()->deletePropertyIfExists($iblockId2, 'LAST_FIRST_NAME');
        $helper->Iblock()->deletePropertyIfExists($iblockId2, 'PHONE_NUMBER');
        $helper->Iblock()->deletePropertyIfExists($iblockId2, 'ADDRESS');


    }
}

