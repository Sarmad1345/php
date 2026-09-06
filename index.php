<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo phpversion();
echo "<br>";
echo "sarmad nadeem";
echo "<br>";
echo "i am a student of computer science";
echo "<br>";
echo "i am learning php";
ECHO 'Hello World!<br>';
echo 'Hello World!<br>';

$name = "sarmad";
$age = 25;
$is_student = true;
$is_teacher = false;
$x = $y = $z = 50;
$no = "67";

echo "here is my details <br>";
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Is Student: " . ($is_student ? "Yes" : "No") . "<br>";
echo "Is Teacher: " . ($is_teacher ? "Yes" : "No") . "<br>";

/// use of var dump use for indentify the data type of variable

var_dump($name);
echo "<br>";
var_dump($age); 
echo "<br>";

var_dump($is_student);
echo "<br>";
var_dump(is_int($name));
echo "<br>";
var_dump(is_int($age));
echo "<br>";

var_dump("This is the name check: " . is_float($name));

echo "<br>";


var_dump($is_teacher);
$updated_no = (int)$no;
echo "<br>";
echo "the value of no is: " . var_dump($updated_no) . "<br>";

$udpated_no_string = (String)$no;

echo "the value of no is: " . var_dump($udpated_no_string) . "<br>";   


/// Math 

echo(pi());
echo "<br>";

echo(min(0, 150, -8, -200));
echo(max(0, 10, -8, -200));
echo "<br>";

echo(abs(-6.7));
echo "<br>";

echo(sqrt(64));
echo "<br>";

echo(round(3.60));
echo "<br>";

echo(round(0.49));
echo "<br>";

echo(rand());

echo "<br>";


// PHP Constants

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";

define("name", "sarmad nadeem");
echo "<br>";

echo name;

const NAME = "Sarmad";
echo "<br>";


echo NAME;
echo "<br>";

//const NAME = "Sarmad";

//NAME = "Ali"; // ❌ Error


// For Laravel 

const APP_NAME = "My Laravel App";
const VERSION = "1.0";
echo "<br>";

echo APP_NAME;
echo "<br>";

echo VERSION;
echo "<br>";

/// PHP Operators — A to Z
/// 1. Arithmetic Operators — Maths wale


$a = 10;
$b = 3;

echo $a + $b;  // 13
echo $a - $b;  // 7
echo $a * $b;  // 30
echo $a / $b;  // 3.333
echo $a % $b;  // 1
echo $a ** $b; // 1000

// Assignment Operators

//=
$name = "Sarmad";

//Matlab:

//$name ke andar "Sarmad" rakho.

// +=
$x = 10;
$x += 5;

//Same as:

$x = $x + 5;

//Result: 15;

// -=
$a = 20;
$a -= 5;
echo "<br>";

echo "Thi is the a value " . $a;    


// same as 
$a = $a - 3;

echo "<br>";

echo "Thi is the a value " . $a;    
echo "<br>";

// result 7

$x = 10;
$x *= 2;

///Same as:

$x = $x * 2;

//Result 20.
//   /=
$x = 10;
$x /= 2;

//Result 5.

// %=
$x = 10;
$x %= 3;

// Same as:

$x = $x % 3;

// Result 1.
 

 // Comparison Operators ⭐

  //   ==

// Equal value check karta hai.

10 == 10;

// Result:

// true

// Lekin:

//10 == "10"

// bhi true ho sakta hai, kyunki == type ko strictly check nahi karta.

// === ⭐

// Equal value + same data type.

10 === 10;

// ✅ true

10 === "10";

// ❌ false

 // Laravel/PHP mein === bohat important hai.

// !=

// Not equal.

10 != 5;

// Result:

// true
// !==

// Not identical — value ya type different ho.

10 !== "10";

// true

// >

 // Greater than:

10 > 5;

// true

// <

// Less than:

5 < 10;

// true

// >=

 // Greater than or equal:

10 >= 10;

// true

 // <=

// Less than or equal:

10 <= 10;

// true


// 🔥 PHP if / else

// if (condition) {
//     // code
// }

if($age >= 18) {
    echo "You are eligible to vote.";
} else {
   echo "You are not eligible to vote.";
}

/// Arrays in php 

// indexed array


$car = array("Volvo", "BMW", "Toyota");
$human = array("sarmad", "student","Full Stack Developer");
echo "<br>";
echo "my name is : " . $human[0] . " My profession is: " . $human[2] . " and also i am a student of: " . $human[1];
?> 
</body>
</html>