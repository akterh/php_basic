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
