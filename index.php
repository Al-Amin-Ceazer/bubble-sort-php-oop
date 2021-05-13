<?php
require_once 'Sorter.php';
require_once 'NumberCollection.php';
require_once 'StringCollection.php';

$numCollect = new NumberCollection([-12,34,-233,7]);

$sorter = new Sorter($numCollect);
$sorter->sort();
echo "<pre>";
print_r($numCollect->data);

$str = new StringCollection('acbD');
$sorter = new Sorter($str);
$sorter->sort();
echo $str->string;