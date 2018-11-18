<?php

// echo 'Hello World';

// $someNumber = 123; // integer
// $someFloat = 3.14; // float
// $someText = 'foo'; // string
// $someLongText = 'weqweqwe
// eqeqe
// qeqeqe
// eqeq
// qeq';

// $someTrue = true; // boolean
// $someNothing = null; // null

// $someArray = [
//     'wewr',
//     'wewe',
//     true,
//     123
// ]; // array
// echo $someArray[1];

// $someAssociativeArray = [
//     5 => 'foo',
//     6 => 'bar',
//     'baz' => 'biz' 
// ]; // associative array

// $person = [
//     'name' => 'John',
//     'lastName' => 'Doe',
//     'age' => '21',
// ];
// echo $person['age'];

// $someMultuDimenssionalArray = [
//     [
//         'name' => 'John',
//         'lastName' => 'Doe',
//         'age' => '21', 
//     ],
//     [
//     'name' => 'John',
//     'lastName' => 'Doe',
//     'age' => '21',
//     ],
// ];
// echo $someMultuDimenssionalArray[1]['lastName'];

// $someMultuDimenssionalArray[] = [
//     'name' => 'Billy',
//     'lastName' => 'Doe',
//     'age' => '23',
// ];

// +
// -
// *
// /
// %
// . concatination

// echo 'foo' . 'bar';
// echo 1 + 1; // 2
// echo 1 . 1; // 11

// $num = 1;
// $num ++;
// --$num;
// $num += 2;

// ==
// !=
// <
// >
// <=
// >=

// ===
// !==
// $num1 = 1;
// $num2 = 2;
// if ($num1 == 1 || $num2 == 2) {

// }else if {

// } else {

// }

// switch($variable) {
//     case 'value':
//     # code...
//     break;

//     default
//     # code...
//     break;
// }

// while(true) {

// }

// do {

// }while (false);

for ($i=0; $i < 30; $i++) {
    $sum = '';
    if($i % 2 == 0 && $i % 3 == 0) {
    $sum = 'Bizz Bazz';
    }else if($i % 2 == 0) {
    $sum = 'Bizz';
    }else if ($i % 3 == 0) {
    $sum = 'Bazz';
    }else {
    $sum = $i;
    }
    echo $sum;
}


$foo = 'RTU is amazing';
echo str_replace('RTU', 'RCS', $foo);

$string = 'abcdef';
$array = str_split('', $string);
$backToString = implode('', $array);
// var_dump($backToString);

// int(float) -> str
echo 123 . '';

// string -> int
echo intval('123aa1');
echo floatval('3.14aa1');

function addTwoNumbers($num1, $num2) {
    return $num1 = $num2;
}
echo '<br><br><br>';
echo addTwoNumbers(1, 2);