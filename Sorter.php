<?php
require_once 'Sortable.php';

class Sorter
{
    public $collection;

    public function __construct(Sortable $collection)
    {
        $this->collection = $collection;
    }

    public function sort()
    {
        $length = $this->collection->getLength();

        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $length - $i - 1; $j++) {
                if ($this->collection->compare($j, $j+1)) {
                    $this->collection->swap($j, $j+1);
                }
            }
        }
    }
}