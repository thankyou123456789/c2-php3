<?php
$x = 10;
$y = 10;
$z = 20;
$m = 20;

echo "<h1>PHP Increment / Decrement Operators</h1>";
echo "<h1> x = $x, y = $y and z = $z<br /></h1>";
echo "<hr color='red' size='4px' />";

echo "*****Pre++x = $x *****<br />";
echo "x++: ", $y++,"<br />";//11 = 10 + 1
echo "y++ : ", $y++,"<br />";//12 = 11 + 1
echo "y++ : ", $y++,"<br />";//13 = 12 + 1

cho "*****posty = $y *****<br />";
echo "y++ : ", $y++,"<br />";//10 = 10 + y
echo "y++ : ", $y++,"<br />";//11 = 10 + 1
echo "y++ : ", $y++,"<br />";//12 = 11 + 1
echo "y++ : ", $y++,"<br />";//13 = 12 + 1

echo "***** Pre --z = $z *****<br />";
echo "--z : ", --$z,"br />";//Pre,19 = 20 - 1
echo "--z : ", --$z,"br />";//Pre,18 = 19 - 1
echo "--z : ", --$z,"br />";//Pre,17 = 18 - 

echo "*****Pre --m = $m *****<br />";
echo "m-- : ", $m--,"<br />"://Post, 20 = 20
echo "m-- : ", $m--,"<br />"://Post, 19 = 20 - 1
echo "m-- : ", $m--,"<br />"://Post, 18 = 19 - 1
echo "m-- : ", $m--,"<br />"://Post, 17 = 18 - 1
