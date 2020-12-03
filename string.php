<<<<<<< HEAD
<?php
//  $name = 'akter';
//  $string = "my name is $name\n";
//  echo $string;

//  // heredoc    'EOD' = it is nulldoc
//  $heredoc =<<<EOD
// i am akter
// i am $name 
// arekta line
// EOD;
// echo $heredoc;

// echo ord('A') ."\n";  //ASCII Vlue for letter to value have to use ord and for value to lettr chr 
// echo chr('98');


// $string = "Hello MF";
// echo $string[0] . PHP_EOL;
// echo $string[-7];
// echo substr($string,2) . PHP_EOL;
// echo substr($string,2,3);
echo " string reverse=========". PHP_EOL;
// $length = strlen($string) -1;
// for($i=1;$i<=$length;$i++){
//     echo $string[$i*-1];
// }
// for($i=$length;$i>0;$i--){

//     echo $string[$i];
// }
// echo strrev($string);
// echo " string tokenization=========". PHP_EOL;
// $string = "hello world, How are you?";
$string2 = "Quick brown fox jump over the lazy fox";

// $part1 = explode(" ",  $string);
// print_r($part1);
// $part2 = implode( " ",$part1);
// echo $part2 ."\n"; 
// $part3 = strtok($string," " );
// while ( $part3 !== false ){
//     echo $part3 ."\n";
//     $part3 = strtok(" ,");

// } print_r($part3);
// $part4 = preg_split("/ | ,/",$string2);
// print_r($part4);
echo "\nsearching string into string=========\n";
// echo strpos($string2,"fox");   //case sensative
// echo stripos($string2,"Fox");  // case insensative
// echo strrpos($string2,"fox");  //reverse sensative
// echo strripos($string2,"fox");    //reverse insensative
$offset = strpos($string2,"fox");
if($offset !== false){

    echo "\nfound it\n";
}else{
    echo "\nnot found\n";
}

?>
=======
<?php
//  $name = 'akter';
//  $string = "my name is $name\n";
//  echo $string;

//  // heredoc    'EOD' = it is nulldoc
//  $heredoc =<<<EOD
// i am akter
// i am $name 
// arekta line
// EOD;
// echo $heredoc;

// echo ord('A') ."\n";  //ASCII Vlue for letter to value have to use ord and for value to lettr chr 
// echo chr('98');


$string = "Hello MF";
// echo $string[0] . PHP_EOL;
// echo $string[-7];
// echo substr($string,2) . PHP_EOL;
// echo substr($string,2,3);
echo " string reverse=========". PHP_EOL;
$length = strlen($string) -1;
// for($i=1;$i<=$length;$i++){
//     echo $string[$i*-1];
// }
// for($i=$length;$i>0;$i--){

//     echo $string[$i];
// }
echo strrev($string);

?>
>>>>>>> 2524e8a4b644e8d5c1a681011e9cdfe427303441
