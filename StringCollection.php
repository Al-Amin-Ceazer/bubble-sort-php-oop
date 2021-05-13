<?php
require_once 'Sortable.php';

class StringCollection implements Sortable
{
    public $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function getLength()
    {
        return strlen($this->string);
    }

    public function compare($l, $r)
    {
        return strtolower($this->string[$l]) > strtolower($this->string[$r]);
    }

    public function swap($l, $r)
    {
        $strArray = str_split($this->string);

        $temp         = $strArray[$l];
        $strArray[$l] = $strArray[$r];
        $strArray[$r] = $temp;

        $this->string = join("", $strArray);
    }
}