<?php

class Factorizacion
{
    public function factoriza($number)
    {
        $factores = [];

        while ($number % 2 == 0) {
            $factores[] = 2;
            $number /= 2;
        }

        $factor = 3;

        while ($factor * $factor < $number) {
            while ($number % $factor == 0) {
                $factores[] = $factor;
                $number /= $factor;
            }

            $factor += 2;
        }

        if ($number > 1) {
            $factores[] = $number;
        }

        return $factores;
    }

    public function getBigerFactor(array $array)
    {
        $lenght = count($array);

        for ($i = 0; $i < $lenght; $i++) {
            for ($j = 0; $j < $lenght - 1; $j++) {
                if ($array[$j] < $array[$j + 1]) {
                    $var = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $var = $array[$j + 1];
                }
            }
        }

        return $array;
    }

    public function multipliFActors(array $array)
    {
        $count = count($array);
        $i = 0;
        $result = 0;

        for ($i = 0; $i < $count - 1; $i++) {
            $result = $array[$i] * $array[$i + 1];
        }


        return $result;
    }

    public function printValues($number)
    {

        $sheing = "";
        $result = "";
        $big = $this->getBigerFactor($this->factoriza($number));
        $mult = $this->multipliFActors($this->factoriza($number));



        foreach ($this->factoriza($number) as $value) {
            $sheing .= $value . " x ";
        }

        $position = strrpos($sheing, "x");
        $new_sheing = substr($sheing, 0, $position);
        $result = $number . " = " . $new_sheing . " | Su factor primo mayor es: " . $big[0] . "\n";
        $result .= "Multiplicación random: " . $mult;

        return $result;
    }
}

$factorizarcion = new Factorizacion;
echo $factorizarcion->printValues(6) . "\n";
