<?php
$i = 1;
//while loop
while ($i <= 10) {
    echo $i;
    $i++;
}
echo "<br>";

// do-while loop
do {
    echo $i;
    $i++;
} while ($i > 5);

// for loop
for($i=10;$i>=-10;$i--) {
    echo "the nuber is : $i <br>" ;
}

// foreach loop
$colors = array("red","green","blue","red") ;
foreach ($colors as $value) {
    echo "color is :$value <br>";
}
