<?php

require_once 'Sortable.php';

class NumberCollection implements Sortable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getLength()
    {
        return count($this->data);
    }

    public function compare($left, $right)
    {
        return $this->data[$left] > $this->data[$right];
    }

    public function swap($left, $right)
    {
        $temp               = $this->data[$left];
        $this->data[$left]  = $this->data[$right];
        $this->data[$right] = $temp;
    }
}