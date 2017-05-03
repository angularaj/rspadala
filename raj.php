<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>My First PHP Page</h1>
    <?php
    $txt = "Infosoft";
    $txt1 = "Juhnu";

    $x = 5;
    $y = 6; 
    $z = 5; 
    echo "scitus $txt ";
    echo " are " . $txt1 . " Childs" . "  =  " ;
    
    echo $x + $y; 
       

function myTest() {
   
    global $z;
    echo "<p>Variable z inside function is: $z</p>";
} 
    
myTest();

echo "<p>Variable z outside function is: $z</p>";
    
    
    
function rtest(){
    
    global $x, $y, $a;
    $a = $x + $y;
    
}
    
rtest();
    echo "Output = $a . $txt1. ";
    
    
    
    function ktest() {
    static $x = 0;
    echo $x;
    $x++;
}

ktest();
ktest();
ktest();    
ktest();
ktest();
    

    echo "<br>";
    

    echo "Sting Lenthg = ";
    echo strlen("Juhnu Tech Solutions");
    
    echo "<br> Word Count = ";
    echo str_word_count("Juhnu Tech Solutions pvt ltd");
    
    echo "<br> Sting Reverse = ";
    echo strrev("PR");
    
    
    echo "<br>";
    echo "Position of Word = ";
    echo strpos("Hello world!", "rld");
    
    
    echo "<br>";
    echo "Replace World = "; 
    echo str_replace("world", "PR", "Hello world!");
    
    
    
    echo "<br>****************************If Else ****************************<br>";
    
$t = date("20");
if ($t < "10") {
    echo "<br>Have a good day!<br>";
}
    else
    {
        echo "<br> Wrong Time <br>";
    }
    
    

    echo "<br>**************************** Switch Case ****************************<br>";
    
    $favcolor = "red";
    
    

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
    
      echo "<br>****************************While Loop ****************************";
    
    $x = 1; 

while($x <= 5) {
    echo "<br>The number is: $x <br>";
    $x++;
}
    echo "<br>While loop End <br>";
    
    
          echo "****************************Do Loop ****************************";
        
        
$d = 1; 

do {
    echo "<br>The number is: $d <br>";
    $d++;
} while ($d <= 5);
    
    
    echo "****************************For Loop ****************************";
    
for ($x = 0; $x <= 10; $x++) {
    echo "<br>The number is: $x <br>";
}
    
    echo "<br> ************Functions **************<br>";
    
    
    function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
    
    
//    
//    function familyName($fname, $year) {
//    echo "$fname Refsnes. Born in $year <br>";
//}
//
//familyName("Hege", "1975");
//familyName("Stale", "1978");
//familyName("Kai Jim", "1983");
//
//    
//    
//    
//    $cars = array("Volvo", "BMW", "Toyota");
//sort($cars);
//    
//    $numbers = array(4, 6, 2, 22, 11);
//sort($numbers);
//    
//    
    
    
?>    
   
   
   <br>
   
   
    <form action="rphp.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>


Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<input type="submit">
</form>
    
    
    
    
    
    

</body>
</html>
