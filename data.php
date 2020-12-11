<?php
 echo "reaing data from file===========\n";
echo getcwd();  //for getting current working path
$filename = "d:\php_basic/file.txt";
if(is_readable($filename)){     // for check redability
$fp = fopen($filename,'r');  // mode r=read,w=Write,a =append,rb= png file thakle
$line = fgets($fp);              // here we can use delimiter  also
echo $line;           // it will read one by one 
while($line = fgets($fp)){   // it will print alll line along
    echo $line;   
} 
rewind($fp);   // and if we use rewind($fp) it will start from first line
fseek($fp,8);      //if we want to read data from a prticular position
fseek($fp,-1,SEEK_END); //IF WE READ DATA FROM END
while($line = fgets($fp)){
    echo $line; }

fclose($fp);
echo "MORE FUNCTION TO READ ALL DATA ALONG==========\n";
$data = file($filename);
echo $data[2];   //it will show data as array
$data = file_get_contents($filename);
echo $data;}
echo "data writing======================"."\n";

$filename = "d:\php_basic/file2.txt";
if(is_writable($filename)){
$fp = fopen($filename,'w');  // if we use only w then previus data will be removed
$fp = fopen($filename,'a');  /// if we use a then previous dat awill also be existed
$write = fwrite($fp,'murcery');
echo $write;
fclose($fp);}
 echo "opening file in different mode===============\n";
 $filename = "d:\php_basic/file2.txt";
 $fp = fopen($filename,'r+');    //r+ data write kore plus ager data rekhe dey 
 $line = fgets($fp);
 echo $line;
 $write = fwrite($fp,"Uranus\n");
 $line = fgets($fp);
 echo $line;
 fseek($fp,0);
 fwrite($fp,"venus");
 $fp = fopen($filename,'w+');
 fwrite($fp,"Uranus\n");    
 rewind($fp);
 $line = fgets($fp);
 echo $line;
 $fp = fopen($filename,'a+');   //a+ data kono rokom change kore na & LINE ER SESHE DATA ADD KORBE       
 fwrite($fp,"Uranus\n");    
 rewind($fp);
 fwrite($fp,"neptune\n");
 $line = fgets($fp);
 echo $line;
file_put_contents($filename,"madari\n",FILE_APPEND | LOCK_EX); // APPEND FOR STORING PREVIOUS DATA AND LOCK FOR FILE LOCKING SO THAT NONE CAN WRITE IT IN RACE CONDITION
file_put_contents($filename,"madari2\n",FILE_APPEND | LOCK_EX);
echo "data processing in a file in different way===============\n";
$filename = "d:\php_basic/file3.txt";

$students = [
    [
        'fname' => 'shajib',
        'nname' => 'bahubali',
        'age' => 23,
        'height'=> 5.10,
        'weight' => 100,
    ],

    [
        'fname' => 'palash',
        'nname' => 'Pire_kebla',
        'age' => 29,
        'height'=> 5.0,
        'weight' => 60,
    ],

    [
        'fname' => 'zihan',
        'nname' => 'sadiar_vatar',
        'age' => 27,
        'height'=> 5.6,
        'weight' => 50,
    ],

    [
        'fname' => 'fahad',
        'nname' => 'bedom_kala',
        'age' => 24,
        'height'=> 5,
        'weight' => 40,
    ]
] ;

$fp = fopen($filename,'w');  // data writing
 foreach($students as $student){
    $data = sprintf("%s %s %s %s %s \n",$student['fname'],$student['nname'],$student['age'],$student['height'],$student['weight'],);
fwrite($fp,$data);   //writing without comma
fputcsv($fp,$student); //using csv =comma seperated value
 }fclose($fp); 

 $fp = fopen($filename,'r');

 while($student = fgetcsv($fp)){
     $student = explode(",",$line);    
     printf("name=%s %s\nage=%s\nheight=%s\nweight=%s\n",$student[0],$student[1],$student[2],$student[3],$student[4]);

 }
 fclose($fp);

 $new =[
     'fname' => 'Akter',
     'nname' => 'the_Boy',
     'age' => 25,
     'height'=> 5.4,
     'weight' => 40,
 ];
 $fp = fopen($filename,"a");          //adding new data with before
 fputcsv($fp,$new);
 fclose($fp);
echo "file serializing with array================================\n";
$data = serialize($students);
file_put_contents($filename,$data,LOCK_EX);
$dataFromFile = file_get_contents($filename); 
$allStudents = unserialize($dataFromFile);

print_r($allStudents);
unset($allStudents[2]);
print_r($allStudents);
array_push($allStudents,$new);
$data = serialize($allStudents);
file_put_contents($filename,$data,LOCK_EX);
echo "file serializing with array================================\n";
$encodeData = json_encode($students);
file_put_contents($filename,$encodeData);
$data = file_get_contents($filename);
$allStudents = json_decode($data,true); //true dile associative array & na dile object hisebe pass hobe
print_r($allStudents);
echo $allStudents[2] ['fname'];  //array te eivabe 
echo $allStudents[2] -> fname;  //object  te eivabe 
