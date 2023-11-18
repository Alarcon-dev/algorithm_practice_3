<?php

/*
    3.	Crea un algoritmo (Sin usar funciones) en PHP que ordene un array de números enteros en orden ascendente
     utilizando el algoritmo de selección. Luego, muestra el array ordenado en pantalla.
 */


class OrderAsc
{

    public function ordenated(...$numbers)
    {
        $lenght = count($numbers);

        for ($i = 0; $i < $lenght; $i++) {
            for ($j = 0; $j <= $lenght - 2; $j++) {

                if ($numbers[$j] > $numbers[$j + 1]) {
                    $var = $numbers[$j];
                    $numbers[$j] = $numbers[$j + 1];
                    $numbers[$j + 1] = $var;
                }
            }
        }

        print_r($numbers);
    }
}


$order = new OrderAsc;
$order->ordenated(4, 3, 2, 55, 0, 1);
