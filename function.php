<?php
function mymesssage()
{
    echo "it is my message";
}
mymesssage();
echo "<br>";
$a = 5;
$b = 6;
function add($a, $b)
{
    return $a + $b ;

}
echo  add(60, 50) . "<br>";
echo add(556, 5585) . "<br>";

function test()
{
    echo "my name is madhusudan dash";
    echo "<br>";
    echo "my name is msdash";
    echo "<br>";
    echo "my age is 27";
    echo "<br>";
}
test();
test();
test();
echo "<br>";
function many()
{
    echo "<h3>user information </h3>";
}
function text()
{
    many();
    test();
}
text();
text();
text();
echo "<br>";
function sum($c, $d)
{
    echo $c + $d;
    echo "<br>";
}
sum(100, 101);
sum(55, 545);
echo "<br>";
function userdata($name, $color) {
    echo"<h1 style='color:$color'>$name </h1>";
}
    userdata("madhusudan","red");
    userdata("msdash","green");
    userdata("pukul", "navyblue");
echo "<br>";
// function fruits($name, $color = "red")
// {
//     echo " $name this color of the fruit is : $color";
// }
// fruits("apple","green");
function madhusudan() 
{
    echo"my name is msdash";
    echo"<br>";
    echo "my age is 27";
    echo"<br>";
    echo "my hometown is bbsr";
function two(){
    echo "yes it is working";
}
}
echo madhusudan();