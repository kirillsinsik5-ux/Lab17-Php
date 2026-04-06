<?php
$integerVar = 42;           // целое число
$floatVar = 3.14159;        // дробное число
$stringVar = "Привет, мир!"; // строка
$boolVar = true;            // логическое значение

echo "Целое число: $integerVar, тип: " . gettype($integerVar) . "<br>";
echo "Дробное число: $floatVar, тип: " . gettype($floatVar) . "<br>";
echo "Строка: $stringVar, тип: " . gettype($stringVar) . "<br>";
echo "Логическое значение: $boolVar, тип: " . gettype($boolVar) . "<br>";

echo "<hr>";

echo "Используем var_dump():<br>";
var_dump($integerVar);
echo "<br>";
var_dump($floatVar);
echo "<br>";
var_dump($stringVar);
echo "<br>";
var_dump($boolVar);
?>