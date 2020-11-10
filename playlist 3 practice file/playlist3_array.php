<?php
 $chakhor=[
    " fahad","palash","akter","shajib"
] ;
echo  $chakhor[2],"\n ";
echo"========\n ";


$n= count($chakhor);   //ascending value 
for ($i=0;$i<$n;$i++){
    echo $chakhor[$i]."\n";
}

echo "====================\n";
for ($i=$n-1;$i>=0;$i--){        //descending value
    echo $chakhor[$i]."\n";
}

echo "====================\n";


// array_push[] add data to last
// array_pop[]   remove data from last
// array_shift[] remove data from first
// array_unshift[] add data to first
$chakhor[2]="zihan";

$n= count($chakhor);   //ascending value 
for ($i=0;$i<$n;$i++){
    echo $chakhor[$i]."\n";
}


echo "====================\n";
$jobholder1=array_pop($chakhor);
$n= count($chakhor);   //ascending value 
for ($i=0;$i<$n;$i++){
    echo $chakhor[$i]."\n";
}
echo "====================\n";
$jobholder2=array_shift($chakhor);
$n= count($chakhor);   //ascending value 
for ($i=0;$i<$n;$i++){
    echo $chakhor[$i]."\n";
}
echo "====================\n";
echo $jobholder1."\n";
echo $jobholder2."\n";

echo "====================\n";
array_unshift($chakhor,"humayun");
for ($i=0;$i<$n;$i++){
    echo $chakhor[$i]."\n";
}
echo "====================\n";
array_push($chakhor,"aktr");
for ($i=0;$i<$n;$i++){
    echo $chakhor[$i]."\n";
}


echo "====================\n";
array_push($chakhor,"aktr");
$jobholder1=array_pop($chakhor);
$n= count($chakhor);   //ascending value 
for ($i=0;$i<$n;$i++){
    echo $chakhor[$i]."\n";
}

echo "associative array \n";
$foods=[
    'vegetables'=>'aram,bean,cucumber,brinjal',
    'fruit'=>'dates,orange,apple',
    'meat'=>'beaf,mutton,nehari'

];
echo $foods['meat']."\n";
$n_ofarray= count ($foods);
for($i=0;$i<$n_ofarray;$i++){    //it will not work as there is no any direct value of array

    echo $foods[$i];
}
foreach( $foods as $key=>$values){
    echo $key."=".$values."\n";
}
$key= array_keys($foods);
print_r($key);
echo PHP_EOL;
$key= array_values($foods);
print_r($key);
echo"====================================\n";

$keys= array_keys($foods);

for($i=0;$i< count ($keys);$i++){    //now it will work as the keys are founded
    $key= $keys[$i];
    echo $foods[$key]."\n";
}
echo"==========\n";

$foods=[
    'vegetables'=>'aram,bean,cucumber,brinjal',
    'fruit'=>'dates,orange,apple',
    'meat'=>'beaf,mutton,nehari'

];
$foods['meat'].=",chicken,ducks";
echo $foods['meat']."\n";
    
//str to array and array to str
$curr= explode(', ','taka, rupee, dollar, dinar, rial');   // ', ' is called delimeter & this is str to arr
var_dump($curr);
print_r($curr);
$arrtoStr= join(', ',$curr);
echo $arrtoStr;
$currency= preg_split('/(, |,)/','taka, rupee, dollar, dinar, rial,oun,wang'); //this is used when , & ,   split together
echo count($currency);
$foods=[
        'vegetables'=>explode(',','aram,bean,cucumber,brinjal'),
        'fruit'=>explode(',','dates,orange,apple'),
        'meat'=>explode(',','beaf,mutton,nehari')
    
    ];
      print_r($foods);
     $newfood=array_pop($foods['meat']);
    array_push($foods['fruit'],'pineapple');
    print_r($foods);
    $checkmyArray=[
        11,22,222,2222,[ 44,[55,44,77,22],3366,66,44],
        ['hh','55',66]   
        
    ];
    print_r($checkmyArray);
    echo $checkmyArray [4] [1] [2]; 
$student=[
    'fname'=>'fahad',
    'lname'=>'khan',
    'char'=>'luiccha',
    'age'=>'34'
];
print_r($student);
echo $student ['fname']." ".$student['lname']."\n";
printf ("%s %s\n",$student['fname'], $student['lname']); //serialize data 
$serialized= serialize($student);
echo $serialized;
$unserialized= unserialize($serialized);
echo $unserialized;
$jsondata= json_encode($student);                   //json data 
echo $jsondata ;
$student2= json_decode($jsondata,true);
print_r ($student2);
$person1=['fname'=>'akter', 'lname'=>'hossain'];
$person2=$person1;
$person2 [lname]='h';                   //now this is deep copy or copy by value
print_r($person1);

print_r($person2);


$person1=['fname'=>'akter', 'lname'=>'hossain'];
$person2= &$person1;
$person2 [lname]='h';                   //now this is sahllow copy or copy by reference
print_r($person1);

print_r($person2);
$person1=['fname'=>'akter', 'lname'=>'hossain'];              //removing data from associative array
print_r ($person1);
unset($person1['fname']);
print_r($person1);
echo"empty value=================================";
$val=0;
if(isset($val)){
    echo "this is set";

}else{
    echo"not set";
}
echo"\n";
if(empty($val)){
    echo "this is empty";

}else{
    echo"not empty";
}
echo"\n";
if(isset($val) && Is_numeric($val) || $val !=''){
    echo "this value is set & not empty";

}else{
    echo"there is no value exactly";
}
echo"\n";
echo"arrayslicing===========================";  //note array slice original array k modify kore na

$shopping=['pulse','onion','chilliPowder','suger','rice'];
$newshop=array_slice($shopping,2,2,true); // if real index need then have to use true
print_r($newshop);
$foods=[
        'vegetables'=>'aram,bean,cucumber,brinjal',
        'fruit'=>'dates,orange,apple',
        'meat'=>'beaf,mutton,nehari'
    
    ];
    $slice= array_slice($foods,1,1);
    print_r ($slice);
$foods=[
        'vegetables'=>'aram,bean,cucumber,brinjal',
        'fruit'=>'dates,orange,apple',                         //array spicing which changes the main array vallue
        'meat'=>'beaf,mutton,nehari'
    
    ];
    $newItem=['drink'=>'juice,coka cola'];
    $splice= array_splice($foods,1,1,$newItem);
     print_r ($splice);
    print_r ($foods);
echo"array merge====================";
$chakhor=[
        "khto shuvo","zihan","dilu","tuki"
    ] ;
$birikhor=[
        " fahad","palash","akter","shajib","humayun"
    ] ;
    $chanbirikhor=array_merge($chakhor,$birikhor);
    // print_r($chanbirikhor);
    echo"using plus method================";
$new=array_slice($chakhor,1,2);    
$new1=array_slice($birikhor,2 ,null,true);
$proBirikhor=['a'=>'fahaidda','b'=>'lombu shuvo','c'=>'polaissa'];
$allInone=$new+$new1+$proBirikhor;
print_r($allInone);
echo "array_sorting==============================";
$proBirikhor=['a'=>'fahaidda','c'=>'lombu shuvo','b'=>'polaissa'];  // note: fn name:sort for normal sorting ,asort for sort with key,rsort for reverse sort,arsort for reverse sort with key,ksort for sorting by key,krsort for reverse of key sort
$birikhor=[
            "fahad","palash","akter","shajib","humayun"
        ] ;
sort($birikhor);
asort($birikhor);
 arsort($birikhor);
ksort($proBirikhor);
rsort($birikhor);
print_r($birikhor);           //for sorting casewise SORT_STRING | SORT_FLAG_CASE
echo "array searching===============================";
$proBirikhor=['a'=>'fahaidda','c'=>'lombu shuvo','b'=>'polaissa'];
$number=[22,65,44,35,76,46,88,];
if(in_array('fahaidda',$proBirikhor)){
    echo "This mc is exist"."\n";       // for associative array we have to search with value not key
}
$indexNo=array_search(35,$number);
echo "$indexNo"."\n";
if (key_exists('c',$proBirikhor)){
    echo "halay ache";
}
echo "array intersection and differencce================="."\n";
$number1 =[33,54,66,76,11,12,54,65,87];
$number2 =[33,58,69,76,11,12,54,69,88];
$chakhor =['a'=>'fahaidda','c'=>'lombu shuvo','b'=>'polaissa','k'=>'dilu','r'=>'gariShuvo','s'=>'shajib'];
$birikhor=['a'=>'akter','s'=>'shajib','f'=>'fahaidda','p'=>'polaissa','c'=>'lombu shuvo'];
$common=array_intersect($number1,$number2);
$common=array_diff($number1,$number2);   // jeta age dibo seitar different item gola print hobe only
print_r($common);
$onlychakhor = array_diff($chakhor,$birikhor);
print_r($onlychakhor);
$probirikhor= array_intersect_assoc($chakhor,$birikhor);  //intersect or difference  with key have to use _assoc
print_r($probirikhor);
echo "array utility functions================="."\n";
$number = [33,54,66,76,11,12,54,65,87];
function square($n){
    printf ("the square of %d is %d \n",$n,$n*$n); // we have to use array walk for printf & others for return value
}
array_walk($number,'square');
function cubeOfnumber($n){
    $cube=$n*$n*$n;
    return $cube ;

}
$cubedArray=array_map('cubeOfnumber',$number); // note -callback funtion is used first
print_r($cubedArray);
echo "odd-even check"."\n";
function evencheck($n){
    return $n%2==0;
}
$evenNumber= array_filter($number,'evencheck');
function oddcheck($n){
    return $n%2==1;
}
$oddNumber= array_filter($number,'oddcheck');  //array filter

print_r($evenNumber);
print_r($oddNumber);
$birikhor=['fahad','palash','akter','shajib','humayun'] ;      
                
            

function filterByletter($n){  //problem detected. running but ouput not showing
    return $n[2]=='t';
}
$filteredName = array_filter($birikhor,'filterByletter');
print_r($filterdName);
$numbers=[1,2,3,4,5,6,7,8,9,10];
function sum($old,$new){
    if($new%2==0){
    return $old+$new;
}return $old;
}
$evenSum=array_reduce($numbers,'sum');       //array reduce
print_r($evenSum);
echo"\n";
function sumOfodd($old,$new){
    if($new%2==1){
    return $old+$new;
}return $old;
}
$oddSum=array_reduce($numbers,'sumOfodd');
print_r($oddSum);
echo"\n";
$girls=['ayesha','tuki','sadia','chanchala'];  //list function
list($palash,$zihan,$shuvo,$keonai)=$girls;
echo $zihan ."\n";
$number= range(24,50,5);      //range function
print_r($number);
foreach( range(0,50,7) as $n){
    if($n>0){
        echo $n ."\n";
    }
}
$number = range(20,70);     
print_r($number);
echo count($number);
$random = mt_rand(0,50);    //===========random function 
echo $number[$random]."\n";
$random = mt_rand(0,50);    //===========random function     //ekhane  ekta bepare confusion ache
echo $number[$random];
echo PHP_EOL;
$luckcheck= $number[$random];
if($luckcheck%2 ==0){
    echo "good luck";
}else{
    echo "bad luck";
}
shuffle($number);
print_r($number);
$fixedNumber = $number[5];
echo "$fixedNumber"; 
$birikhor=['a'=>'akter','s'=>'shajib','f'=>'fahaidda','p'=>'polaissa','c'=>'lombu shuvo'];
shuffle($birikhor);   //associative array te shuffle korle key vanish hoye jay
$randomKey = array_rand($birikhor);
echo $birikhor[$randomKey]; 

