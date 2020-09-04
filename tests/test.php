<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use ArraySorting\AlternateSort;

echo AlternateSort::run([1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11]);