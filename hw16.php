<?php
// Zadatak 1
echo "Zadatak 1 <br> <br>";

function emailFilter($emailArray)
{
    $validEmails = [];
    foreach ($emailArray as $emails) {
        if (str_contains($emails, "@")) {
            array_push($validEmails, $emails);
        }
    }
    return implode(' , ', $validEmails);
}

$someArray = ['jelena@sadsad', 23, 'jelenad', 'fhdf@fsdf', 425, "4@faf"];

echo "Validni mejlovi (prema datim kriterijumima) su: " . emailFilter($someArray);

// Zadatak 2
echo "<br> <br> Zadatak 2 <br> <br>";

function calculations($numberArray, $operator = '+')
{
    if (!is_array($numberArray) || ($operator !== '+' && $operator !== '-' && $operator !== '*' && $operator !== '/')) {
        die('Input values not valid!');
    }
    $result = $numberArray[0];
    if (($operator == "+") || ($operator == "-") || ($operator == "*") || ($operator == "/")) {
        for ($i = 1; $i < count($numberArray); $i++) {
            if ($operator == "+") {
                $result = $result + $numberArray[$i];
            } else if ($operator == "-") {
                $result = $result - $numberArray[$i];
            } else if ($operator == "*") {
                $result = $result * $numberArray[$i];
            } else if ($operator == "/") {
                $result = $result / $numberArray[$i];
            }
        }
        return $result;
    }
}


$numArray = [24, 34, 65, 78, 11];
echo calculations($numArray);



// Zadatak 3

echo "<br> <br> Zadatak 3 <br> <br>";

function doesKeyExist($array, $key)
{
    $keyExists = false;
    foreach ($array as $keyPosition => $value) {
        if ($keyPosition == $key) {
            $keyExists = true;
        }
    }
    if ($keyExists == true) {
        return "This key DOES EXIST. <br>";
    } else {
        return "This key DOES NOT EXIST. <br>";
    }
}

$someOtherArray = [1, 34, 234234, 122, 1, 344];
echo doesKeyExist($someOtherArray, 5);
