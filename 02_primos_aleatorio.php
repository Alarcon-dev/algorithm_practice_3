<?php
/*
    2.	Crear un algoritmo que me muestre los números que no son primos y determine 
    la razón por la cual no son primos de un conjunto de 1,000 números aleatoriamente entre el 1 y 5’000,000.
    Ejemplo  : 4999069  El número es divisible por 821
 */

class NotPrime
{
    public function NotPrime($n)
    {
        $length = sqrt($n);

        if ($n < 2) {
            $value = false;
        }

        $value = false;

        for ($i = 2; $i <= $length; $i++) {

            if ($n % $i == 0) {
                $value .= $n . " es divisible por " . $i . "<br>";
            }
        }

        return $value;
    }

    public function comprovation()
    {
        for ($j = 1; $j <= 10; $j++) {

            $ran_number = rand(1, 5000000);

            $value = $this->NotPrime($ran_number);
        }

        return $value;
    }
}

$not_prime = new NotPrime;
echo $not_prime->comprovation();
