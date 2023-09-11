<?php 
$a = true;
$b = false;
if ($a && $b) {
    echo "jika dua kondisi benar";
} else {
    echo "jika satu kondisi benar dan satu salah.";
}
// Output: At least one condition is false.
echo "<hr>";
$a = true;
$b = false;
if ($a || $b) {
    echo "jika satu kondisi benar dan satu salah.";
} else {
    echo "jika dua kondisi sama sama salah.";
}
// Output: At least one condition is true.
echo "<hr>";

$a = true;
if (!$a) {
    echo "jika kondisi salah";/*karena a adalah false jadi keitung true karean oprator ! membalik true jadi false */
} else {
    echo "The condition is true.";
}
// Output: The condition is true.


echo "<hr>";

?>