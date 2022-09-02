<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

class Parse
{
    public function parseToGetTheNumber(string $parseString): array
    {
        $currentNumber = 0;
        $returnArray = [];

        foreach (str_split(($parseString)) as $character) {
            switch ($character) {
                case "i":
                    $currentNumber++;
                    break;
                case "d":
                    $currentNumber--;
                    break;
                case "s":
                    $currentNumber = $currentNumber * $currentNumber;
                    break;
                case "o":
                    $returnArray[] = $currentNumber;
            }
        }

        return $returnArray;
    }

}

$parseClassObject = new Parse();
$parseClassObject->parseToGetTheNumber("iiisdoso");

