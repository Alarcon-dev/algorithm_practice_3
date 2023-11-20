<?php

/*
5.	Crear un algoritmo que verifique si un texto es un palíndromo
*/

class Palindromo
{
    public function palindromoDetected($word)
    {
        $word = strtolower($word);
        $lengt = strlen($word);
        $result = $word . " : Es un palíndromo";
        $init = 0;
        $final = $lengt - 1;
        while ($init < $final) {
            if ($word[$init] != $word[$final]) {
                $result = $word . " : No es un palíndromo";
            }

            $init++;
            $final--;
        }

        return $result;
    }
}


$palindromo = new Palindromo;
echo $palindromo->palindromoDetected("php") . "\n";
