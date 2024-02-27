<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first php page</h1>

    <?php
$color = "red";
echo "My car is " . $color . "<br>";

var_dump(5);
var_dump("John");

?>


//  variable
 <?php
//global
$x= 5;
$y = 10;

function myGlobalTest(){
    global $x,$y;
    $y = $x + $y;

}
myGlobalTest();

echo $y; // output : 15
 //static
function myTest(){
    static $x = 0;
    echo $x;
    $x++;
}
myTest();
myTest();
myTest();

 ?>
</body>
</html>