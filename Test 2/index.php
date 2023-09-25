<?php

// //Create a PHP script using a loop to print all even numbers between 1 and 10.

// for($i=0; $i<=10; $i= $i+2){
//     echo $i . "<br>";
// }

// //Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.

// function greet($name) {
//     echo 'Hello '.$name.'!';
// }
// greet('Php lovers');

// //Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.

// function factorial($num) {
//     if ($num <= 1) {
//         return 1;
//     } else {
//         return $num * factorial($num - 1);
//     }
// }

// // Calculate the factorial of a number
// $number = 5;
// $result = factorial($number);
// echo "The factorial of $number is $result.";

// function factorial($n){
//     if($n <= 1){
//         return 1;
//     }else{
//         return $n * factorial($n -1);
//     }
// }

// $number=5;
// $result = factorial($number);
// echo "The factorial of 5 is $result.";

//Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.
// function fibonacci ($num){
//     $veryOld =0;
//     $old =1;
//     $new =1;
//     for($i=1; $i<=$num; $i++){
//         echo $veryOld. ' ';
//         $old= $new;
//         $new = $old + $veryOld;
//         $veryOld= $old;
//     }
// }

// fibonacci(10);

// function fibonacci( $equal ) {
//     $veryOld = 0;
//     $old = 1;
//     $new = 1;
//     for ( $i = 1; $i <= $equal; $i++ ) {
//         echo $veryOld . ' ';
//         $old = $new;
//         $new = $veryOld + $old;
//         $veryOld = $old;
//     }
// }

// fibonacci(10);