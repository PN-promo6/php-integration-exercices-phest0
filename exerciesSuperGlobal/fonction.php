<?php
$functionTest = function ($chiffre) {
    echo ($chiffre + 1) . "\n";
};
$array = [1, 2, 3, 4];
function ApplyOnArray($array, $anonymFunction)
{
    for ($i = 0; $i < count($array); $i++) {
        $current = $array[$i];
        $anonymFunction($current);
    }
}

$mavar = ApplyOnArray($array, $functionTest);

function testTypage(int $number, string $str): string
{
    return $str . " has " . $number;
}
$mavar2 = testTypage(3, "bonjour");
echo $mavar2;
