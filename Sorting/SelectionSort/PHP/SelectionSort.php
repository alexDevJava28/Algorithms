<?php declare(strict_types = 1);

class SelectionSort {

    public function sort(array &$arr): void {

        for ($i = 0, $n = count($arr); $i < $n; $i++) {
            $min = $i;

            for ($j = $i + 1; $j < $n; $j++) {
                if ($this->less($arr[$j], $arr[$min])) {
                    $min = $j;
                }
            }

            $this->exchange($arr, $i, $min);
        }

    }

    public function less(int $a, int $b): bool {
        return $a < $b;
    }

    public function exchange(array &$arr, int $i, int $j): void {

        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;

    }

    public function isSorted(array $arr): bool {

        for ($i = 1, $n = count($arr); $i < $n; $i++) {
            if ($this->less($arr[$i], $arr[$i - 1])) {
                return false;
            }
        }

        return true;

    }

    public function show(array $arr): void {

        for ($i = 0, $n = count($arr); $i < $n; $i++) {
            echo ($i + 1) . '. ' . $arr[$i] . '.' . PHP_EOL;
        }

    }

}