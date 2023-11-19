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
        var_dump($var);
        var_dump($flag);


        if ($var > $flag) {
            array_pop($array);
        }


        print_r($array);
    }
}


$factors = new PrimeFactor;
echo $factors->random(12);
//echo $factors->multipliArray([2, 2, 2]);
