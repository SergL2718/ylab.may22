<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
use Bitrix\Main\Localization\Loc;

?>
  <?php
    $APPLICATION->IncludeComponent("bitrix:form.result.new","",Array(
            "SEF_MODE" => "Y",
            "WEB_FORM_ID" => 1,
            "LIST_URL" => "",
            "EDIT_URL" => "",
            "SUCCESS_URL" => "",
            "CHAIN_ITEM_TEXT" => "",
            "CHAIN_ITEM_LINK" => "",
            "IGNORE_CUSTOM_TEMPLATE" => "Y",
            "USE_EXTENDED_ERRORS" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "SEF_FOLDER" => "/",
            "VARIABLE_ALIASES" => Array(
            )
        )
    );
?>

