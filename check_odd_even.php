<?php

function checkEvenOdd($n)
{
	if ($n % 2 == 0) {
		return $n . " is an even number!";
	} else {
		return $n . " is an odd number!";
	}
}

$checking_value = 53;   //The value of the variable will be changeable.

$result = checkEvenOdd($checking_value);

echo $result;
