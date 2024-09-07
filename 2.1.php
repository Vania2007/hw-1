<?php
$year = 2024; //integer
$is_hungry = true; //boolean
$price = 25.40; //float
$favourite_movie = "Таксі"; //string

echo "Рік: $year\n<br/>";
echo "Голодання: $is_hungry\n<br/>";
echo "Ціна: $price\n<br/>";
echo "Улюблений фільм: $favourite_movie";

echo "\n\n\n<br/><br/><br/>Завдання із констанктами\n<br/>";
const CONSTANT_A = "Hello, ";
echo CONSTANT_A;
define("CONSTANT_B", "PHP!\n<br/>");
echo CONSTANT_B;
// define("INFO_OF_DATE", "September, 7", true);
// echo info_of_date;

//Проблема із регістронезалежними константами. Постійно видає помилку. Дивився по приклдам у інтернеті, але не працює.
//Знайшов таку інформацію на якомусь форумі: "Поддержка объявления регистронезависимых констант была удалена. Теперь в PHP константы всегда регистрозависимы, и по константам PHP есть изменения."
