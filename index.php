<?php




$marks = 66;

if ($marks >= 80 && $marks <= 100) {
	echo 'You Got A+';
}elseif ($marks >= 70 && $marks <= 79) {
	echo 'You Got A';
}elseif ($marks >= 60 && $marks <= 69) {
	echo 'You Got A-';
}elseif ($marks >= 50 && $marks <= 59) {
	echo 'You Got B';
}elseif ($marks >= 40 && $marks <= 49) {
	echo 'You Got C';
}elseif ($marks >= 33 && $marks <= 39) {
	echo 'You Got D';
}elseif ($marks >= 0 && $marks <= 32) {
	echo 'You Got F';
}else{
	echo 'Invalid Number';
}






?>