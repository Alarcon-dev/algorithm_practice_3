<?php

/*
    4.	Escribe un código que encuentre los factores primos cuya multiplicación produzca un número específico.
*/

class PrimeFactor
{
    public function validator(int $number)
    {
        $long = sqrt($number);

        if ($number < 2) {
            $value =  false;
        }

        $value = true;

        for ($i = 2; $i <= $long; $i++) {

            if ($number % $i == 0) {
                $value =  false;
            }
        }

        return $value;
    }

    public function multipliArray(array $array)
    {
        if (empty($array[0])) {
            return false;
        }

        $lengt = count($array);

        $result = false;
        $value = $array[0];

        for ($i = 1; $i < $lengt; $i++) {
            $result = $value * $array[$i];
            $value = $result;
        }

        return $result;
    }



    public function random(int $number)
    {
        $array = [];
        $lengt = ceil(sqrt($number));
        $flag = $number;

        for ($i = 2; $i <= $lengt + 1; $i++) {

            for ($j = 2; $j <= $lengt + 1; $j++) {

                if ($this->validator($j)) {

                    if (is_int($number / $j) && $this->validator($j)) {
                        if ($number / $j == $j) {
                            $array[] = $j;
                        }
                        $number = $number / $j;
                        $array[] = $j;
                    }
                }
            }
        }

        $var = $this->multipliArray($array);

        if ($var > $flag) {
            array_pop($array);
        }


        return $array;
    }

    public function factorDetected($num)
    {
        $array = [2, 3, 5, 7];
        $lengt = count($array);
        $value = false;

        for ($i = 0; $i < $lengt; $i++) {

            if ($num % $array[$i] == 0) {
                $value = true;
            }
        }

        return $value;
    }

    public function getBigerFactor($array)
    {
        $lenght = count($array);

        for ($i = 0; $i < $lenght - 1; $i++) {
            for ($j = 0; $j < $lenght - 1; $j++) {
                if ($array[$j] < $array[$j + 1]) {
                    $var = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $var;
                }
            }
        }

        return $array;
    }

    public function getFators($num)
    {

        $result = "Error: El número no se puede factorizar";
        $value = "";

        if ($num % 2 == 0 || $num % 3 == 0 || $num % 5 == 0 || $num % 7 == 0) {

            $get_result = $this->random($num);
            $biger = $this->getBigerFactor($get_result);

            foreach ($get_result as $item) {
                $value .= $item . " x ";
            }

            $position = strrpos($value, "x");
            $change = substr($value, 0, $position);
            $result = $num . " = " . $change . " | " . "Su factor prímo mayor es: " . $biger[0];
        }
        return $result;
    }
}


$factors = new PrimeFactor;
echo $factors->getFators(6000);
