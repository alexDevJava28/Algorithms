<?php declare(strict_types = 1);

require_once 'SelectionSort.php';

$selectionSort = new SelectionSort();
$exampleArray = [1, 56, -43, 1234, 67, 87, 6];

echo 'Is array sorted? - ' . ($selectionSort->isSorted($exampleArray)) . PHP_EOL;

$selectionSort->sort($exampleArray);

echo 'Is array sorted? - ' . ($selectionSort->isSorted($exampleArray)) . PHP_EOL;

$selectionSort->show($exampleArray);
