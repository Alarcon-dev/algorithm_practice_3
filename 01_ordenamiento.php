<?php

class Order
{
    public function orderNums(...$nums)
    {
        $length = count($nums);
        for ($j = 0; $j < $length; $j++) {
            for ($i = 0; $i < $length - 1; $i++) {

                if ($nums[$i] < $nums[$i + 1]) {

                    $var = $nums[$i];
                    $nums[$i] = $nums[$i + 1];
                    $nums[$i + 1] = $var;
                }
            }
        }

        print_r($nums);
    }
}

$order = new Order;
$order->orderNums(8, 5, 3, 0, 7, 7);
