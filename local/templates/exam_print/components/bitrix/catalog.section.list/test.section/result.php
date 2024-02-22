<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}

//echo '<pre>';
//var_dump($arResult);
//echo '</pre>';

//echo '<pre>';
//var_dump(count($arResult['ITEMS']));
//echo '</pre>';

?>

<?php foreach ($arResult['ITEMS'] as $i => $item): ?>
    <?php
            echo '<pre>';
            var_dump($item);
            echo '</pre>';
    ?>
<?php endforeach; ?>
