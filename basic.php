<?php
$number = 23;
$num = 3;
$result = $number / $num;
echo $result;
printf("the binari of %d is %b\n", 23, 23);
printf("the dec of %b is %d\n", 45, 1011);
printf("the octal of %o is %d\n", 012, 012);
printf("the hex of %x is %d \n", 1212, 1212);
printf("the binari of %d is %b", 23, 23);
$fname = "MD.";
$lname = "Hossain";
$midname = "Akter";
printf('My full name is %3$s %1$s %2$s ', $midname, $lname, $fname);
echo "\n";
$n = 12;
$m = 49.145823;
printf('the equuivalent of binary %1$d is  %1$b ', $n);
echo "\n";
printf("%015.3f", $m);
$return = sprintf('My full name is %3$s %1$s %2$s ', $midname, $lname, $fname);
echo strtoupper($return);
$a = 17;
if ($a % 2 == 0) {
    echo "this is even no";
} else {
    echo "this is odd no\n";
}
if ($a > 10) {
    echo "this is greater then 10";
} else {
    echo "this is not greater then 10";
};
echo "\n";
$b = 13;
if ($s != $b) {
    echo "a  is not equal to b";
}
$x = 123;
$y = 120;
if ($x >= $y) {
    echo "x is grt or eq to y";
} elseif ($x <= $y) {
    echo "x is smaller then y";
} elseif ($x = $y) {
    echo "x=y";
}
echo "\n";
$year = 2100;
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is leap year";
} else if ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not leap year";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not leap year";
}
echo "\n";
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "this is leaP YEar";
} else {
    echo "this is not leap year";
}
$n = 14;
$result = (14 == $n) ? " Its forteen" : ((10 == $n) ? "its ten" : "its a number"); //ternary operator


echo $result;
echo "\n";
$checkeven = ($n % 2 == 0) ? "its even" : "its Odd";
echo "$checkeven";
$n = 5;
$r = $n % 2;
switch ('$r') {
    case 0:
        echo 'its even';
        break;
    default:
        echo 'its  odd';
}
echo "\n";
$place = "khilkhet";
switch ($place) {
    case 'uttara': // have to write echo again and again
        echo "i like uttara";
        break;
    case 'gulshan':
        echo "its wonderful place";
        break;
    case 'banani':
        echo "its vip area";
        break;
    case 'dhanmondi': //shortcut way of echo ,echo is called one time
    case 'farmgate':
        echo ucwords($place) . " is conjugated area";
        break;
    default:
        echo "i dont like dhaka actually";
}
echo "\n";


$n = -11;
$checkeven = $n % 2;
switch ($checkeven) {
    case 0:      //if case be true then next switch will turn to $n
        switch ($checkeven) {
            case $checkeven > 0:
                echo "its a positive even value";
                break;
            case $checkeven < 0:
                echo "its a negetive even value";
                break;
        }
        break;
    default:

        switch ($checkeven) {
            case $checkeven > 0:
                echo "its a positive odd value";
                break;
            case $checkeven < 0:
                echo "its a negetive odd value";
        }
}
echo "\n";
switch (true) {  //just using true function
    case ($checkeven == 0 && $n > 0):
        echo "positive even no";
        break;
    case ($checkeven == 0 && $n < 0):
        echo "negative even even no";
        break;
    case ($checkeven == 1 && $n > 0);
        echo "positive odd number";
        break;
    case ($checkeven == -1 && $n < 0);
        echo "negative odd number";
}
echo "\n";
$string = "8balls";
switch ($string) {
    case (string) "8":
        echo "8 balls";
        break;
    case (string)"9balls":
        echo "nine balls";
        break;
    case (string)"8balls":
        echo "eight balls";
}

for ($i = 0, $j = 10; $j > 0; $i++, $j--) { //nested loop

    echo $i . ":" . $j;
    echo PHP_EOL;
}
for ($i = 1; $i < 12; $i++) {

    // echo $i;
    echo "\n";

    for ($j = 0; $j < $i; $j++) {
        echo "&";
    }
}
echo PHP_EOL;  //finding factorial of a no in various ways
$num = 7;
$fact = 1;
for ($i = $num; $i > 0; $i--) {
    $fact = $fact * $i;
    echo " the factorial of $num is =  " . $fact;
}
$j = 1;
$result = 1;
for ($n = 1; $n <= 20; $n++) {
    $result *= $n;
    $j++;
}
echo "factorial of $n is  .$result ";



for ($i = 0; $i <= 100; $i++) //finding no divisible by 7 & 11
{
    echo ($i % 7 == 0) ? "$i \n" : "";
    echo ($i % 11 == 0) ? "$i \n" : "";
}
for ($i = 0, $j = 0; $i < 100; $i += 7, $j += 11) {

    echo $i . "\n";
    echo $j < 100 ? $j . "\n" : "";  //using ternary operator
}
echo "=================\n";

for ($b = 12; $b < 34; $b++) {   //break & continue
    if ($b < 20) {
        continue;
    }
    echo $b . "\n";
}
echo PHP_EOL;
for ($b = 12; $b < 34; $b++) {   //break & continue
    if ($b > 20) {
        break;
    }
    echo $b . "\n";
}
$a = 0;
$b = 1;

for ($i = 0; $i <= 10; $i++) { //fibonacci series 
    echo $a . " "; //
    $c = $a + $b;
    $a = $b; //a will store value of b
    $b = $c; //b will store value of c

}
echo "===================\n";
$x = 3;
$y = 4;
$result = $x <=> $y;     //sapceship operator

if ($result == 1) {
    echo "true";
} elseif ($result == 0) {
    echo "equal value";
} else {
    echo "false";
}
echo PHP_EOL;

$default_lat = 23.9;
$default_lon = 90.8;
$user_lat = 23444;
// $lat=isset($user_lat)?" $user_lat":$default_lat;  //this is ternary operator
$lat = $user_lat ?? $default_lat; //null colles operator
echo $lat;