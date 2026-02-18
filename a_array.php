<?php
$arr =array("madhusudan dash","30051998","aloknagar");
// print_r ($arr) ;
echo $arr[2]. "<br>";
echo $arr[1];
echo"<br>";
$array = ["madhu",5525,"dash"];
print_r ($array);
echo "<br>";
var_dump ($array);
echo "<br>";
// ASSOCIATIVE ARRAY
$ar =["name"=>"msd","serial_no"=>"355252","mob_no"=>2525];
// print_r ($ar);
echo $ar["name"] ;
echo"<br>";
$array1 =[
    ["madhusdudandash dash","dashmsd", 300519998]
];
echo "<pre>";
print_r($array1);
echo"</pre>";
// remove and add in array
$arname =["madhusudan","dash",23235];
print_r($arname);
array_push ($arname,"D.O.B 03/25/6656");
echo "<pre>";
print_r ($arname);
echo "</pre>";
array_pop($arname);
print_r($arname);
?>