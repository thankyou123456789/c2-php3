<?php
$x = 120;
$y = "100";

echo "<h1>PHP Comparison Operators</h1>";
echo "<h1> x = $x and y = $y<br /></h1>";
echo "<hr color='red' size='4px' />";

]echo $x == z : ", var_dump($x == $z),"<br />";//$x == $z //Not Good
echo $x === z : ", var_dump($x === $z),"<br />";//$x === $z //OK
echo $x <=> z : ", var_dump($x <=> $z),"<br />";//$x <=> $z // ERROR
echo $x <=> y : ", var_dump($x <=> $y),"<br />";//$x <=> $y 
echo $x > y : ", var_dump($x > $y),"<br />";//$x > $y
echo $x < y : ", var_dump($x < $y),"<br />";//$x < $y
echo $x >= y : ", var_dump($x >= $y),"<br />";//$x >= $y
echo $x <= y : ", var_dump($x <= $y),"<br />";//$x <= $y
echo $x != y : ", var_dump($x != $y),"<br />";//$x != $y
echo $x == z : ", var_dump($x == z),"<br />";//$x != $y
echo $x !== z : ", var_dump($x != $y),"<br />";//$x != $y