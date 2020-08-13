<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Numbers</title>
</head>
<body>
	<h3>The Fibonacci Numbers are as follows:</h3>

<?php

function fibonacci($numbers){
    //The first number
    $first = 0;
    //The second number
    $second = 1;
    $results = 0;

    for($i = 0; $i <= $numbers; $i++){

        if($i <= 1){
            $results = $i;
        }else {
            // the results generate the loop summation
            $results = $first + $second;
            // The first number is replaced with the second
            $first = $second;
            // The second number becomes results
            $second = $results;
        }
        // Displays the summed numbers  
        echo $results . ",";
    }

}
fibonacci(15);

?>