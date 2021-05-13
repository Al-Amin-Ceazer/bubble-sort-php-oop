<?php
require_once 'Classes/Sorter.php';
require_once 'Classes/NumberCollection.php';
require_once 'Classes/StringCollection.php';

$numCollect = new NumberCollection([-12,34,-233,7]);

$sorter = new Sorter($numCollect);
$sorter->sort();
echo "<pre>";
print_r($numCollect->data);

$str = new StringCollection('XaDcb');
$sorter = new Sorter($str);
$sorter->sort();
echo $str->string;