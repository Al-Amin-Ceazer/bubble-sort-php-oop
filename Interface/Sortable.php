<?php

interface Sortable {
    public function getLength();
    public function compare($l, $r);
    public function swap($l, $r);
}