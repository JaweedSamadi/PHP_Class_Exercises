<?php
// Anonymous function to filter numbers divisible by both 3 and 7
$array = [21, 42, 35, 10, 14, 70, 6];
$result = array_filter($array, function($number) {
    return $number % 3 === 0 && $number % 7 === 0;
});
print_r($result);
?>
