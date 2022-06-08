<?php

namespace Sprint\Migration;

class ylabver0120220527102736 extends Version
{
    protected $description = "Миграция для создания Типа ИБ 'Клиент', 2-x ИБ 'Контакты', 'Адреса'";

    protected $moduleVersion = "4.0.6";

    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Iblock()->saveIblockType([
            'ID' => 'user_contacts',
            'SECTIONS' => 'N',
            'ACTIVE'=> 'Y',
            'EDIT_FILE_BEFORE' => null,
            'EDIT_FILE_AFTER' => null,
            'IN_RSS' => 'Y',
            'SORT'=>'10',
            'LANG' => [
                'en' => [
                    'NAME' => 'Contacts',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
                'ru' => [
                    'NAME' => 'Контакты',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
            ],
        ]);
        $iblockId1=$helper->Iblock()->saveIblock([
            'IBLOCK_TYPE_ID' => 'user_contacts',
            'LID' =>
                [
                    0 => 's1'
                ],
            'CODE' => 'contacts',
            'API_CODE' => null,
            'REST_ON' => 'N',
            'NAME' => 'Контакты',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'LIST_PAGE_URL' => '#SITE_DIR#/news/index.php?ID=#IBLOCK_ID#',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/news/detail.php?ID=#ELEMENT_ID#',
            'SECTION_PAGE_URL' => null,
            'CANONICAL_PAGE_URL' => '',
            'PICTURE' => null,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'RSS_TTL' => '24',
            'RSS_ACTIVE' => 'N',
            'RSS_FILE_ACTIVE' => 'N',
            'RSS_FILE_LIMIT' => '10',
            'RSS_FILE_DAYS' => '7',
            'RSS_YANDEX_ACTIVE' => 'N',
            'XML_ID' => null,
            'INDEX_ELEMENT' => 'Y',
            'INDEX_SECTION' => 'N',
            'WORKFLOW' => 'N',
            'BIZPROC' => 'N',
            'SECTION_CHOOSER' => 'L',
            'LIST_MODE' => '',
            'RIGHTS_MODE' => 'S',
            'SECTION_PROPERTY' => 'N',
            'PROPERTY_INDEX' => 'N',
            'VERSION' => '2',
            'LAST_CONV_ELEMENT' => '0',
            'SOCNET_GROUP_ID' => null,
            'EDIT_FILE_BEFORE' => '',
            'EDIT_FILE_AFTER' => '',
            'SECTIONS_NAME' => 'Разделы',
            'SECTION_NAME' => 'Раздел',
            'ELEMENTS_NAME' => 'Элементы',
            'ELEMENT_NAME' => 'Элемент',
            'EXTERNAL_ID' => null,
            'LANG_DIR' => '/',
            'SERVER_NAME' => null,
            'IPROPERTY_TEMPLATES' =>
                [],
            'ELEMENT_ADD' => 'Добавить элемент',
            'ELEMENT_EDIT' => 'Изменить элемент',
            'ELEMENT_DELETE' => 'Удалить элемент',
            'SECTION_ADD' => 'Добавить раздел',
            'SECTION_EDIT' => 'Изменить раздел',
            'SECTION_DELETE' => 'Удалить раздел',

        ]);
        $helper->Iblock()->saveIblock([
            'IBLOCK_TYPE_ID' => 'user_contacts',
            'CODE' => 'adress',
            'API_CODE' => null,
            'REST_ON' => 'N',
            'NAME' => 'Адрес',
            'LID' =>
                [
                    0 => 's1',
                ],
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'LIST_PAGE_URL' => '#SITE_DIR#/news/index.php?ID=#IBLOCK_ID#',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/news/detail.php?ID=#ELEMENT_ID#',
            'SECTION_PAGE_URL' => null,
            'CANONICAL_PAGE_URL' => '',
            'PICTURE' => null,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'RSS_TTL' => '24',
            'RSS_ACTIVE' => 'N',
            'RSS_FILE_ACTIVE' => 'N',
            'RSS_FILE_LIMIT' => '10',
            'RSS_FILE_DAYS' => '7',
            'RSS_YANDEX_ACTIVE' => 'N',
            'XML_ID' => null,
            'INDEX_ELEMENT' => 'Y',
            'INDEX_SECTION' => 'N',
            'WORKFLOW' => 'N',
            'BIZPROC' => 'N',
            'SECTION_CHOOSER' => 'L',
            'LIST_MODE' => '',
            'RIGHTS_MODE' => 'S',
            'SECTION_PROPERTY' => 'N',
            'PROPERTY_INDEX' => 'N',
            'VERSION' => '2',
            'LAST_CONV_ELEMENT' => '0',
            'SOCNET_GROUP_ID' => null,
            'EDIT_FILE_BEFORE' => '',
            'EDIT_FILE_AFTER' => '',
            'SECTIONS_NAME' => 'Разделы',
            'SECTION_NAME' => 'Раздел',
            'ELEMENTS_NAME' => 'Элементы',
            'ELEMENT_NAME' => 'Элемент',
            'EXTERNAL_ID' => null,
            'LANG_DIR' => '/',
            'SERVER_NAME' => null,
            'IPROPERTY_TEMPLATES' =>
                [],
            'ELEMENT_ADD' => 'Добавить элемент',
            'ELEMENT_EDIT' => 'Изменить элемент',
            'ELEMENT_DELETE' => 'Удалить элемент',
            'SECTION_ADD' => 'Добавить раздел',
            'SECTION_EDIT' => 'Изменить раздел',
            'SECTION_DELETE' => 'Удалить раздел',
        ]);
    }


    public function down()
    {

            $helper = $this->getHelperManager();

            $ok1=$helper->Iblock()->deleteIblockIfExists(adress);
            $ok2=$helper->Iblock()->deleteIblockIfExists(contacts);
            $ok3=$helper->Iblock()->deleteIblockType(user_contacts);



            if ($ok1) {
                $this->outSuccess("ИБ 'Адрес' удален");
            } else {
                $this->outError('Ошибка удаления типа ИБ');
            }
            if ($ok2) {
                $this->outSuccess("ИБ 'Котакты' удален");
            } else {
                $this->outError('Ошибка удаления типа ИБ');
            }
            if ($ok3) {
                $this->outSuccess("Тип ИБ 'Котакты' удален");
            } else {
                $this->outError('Ошибка удаления типа ИБ');
            }
        }


    }

