<?php
function testLocal() {
    $x = 10; // local variable
    echo "Local variable x = $x<br>";
}

testLocal();
?>
<?php
$x = 5;
$y = 10;

function testGlobal() {
    global $x, $y;
    echo "Sum = " . ($x + $y) . "<br>";
}

testGlobal();
?>
<?php
function testStatic() {
    static $x = 0;
    $x++;
    echo "Value of x = $x<br>";
}

testStatic();
testStatic();
testStatic();
?>