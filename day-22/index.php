<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// variable
/*
multi line comment
*/
echo "Hello World!<br>";
$color = "sharmin";
echo $color . "<br>";
$txt = "text";
echo "this is $txt" . "<br>";
$txt2 = "this is text two,";
echo "this is text one, " . $txt2 . " This is text three <br>";
$x = 5;
$y = 10;
echo $x + $y ."<br>";
//array
$cars = array("BMW","VOLVO","TOYOTA");
var_dump($cars);
// class
class car  {
    public $moderl = "VOLVO";
    public $color = "black";
    public function getCarInformation(){
        return "model : " . $this->moderl . "color : " . $this->color;
    }
}
$car1 = new car();
echo $car1 ->getCarInformation();
?>

</body>
</html>