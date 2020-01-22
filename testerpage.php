<?php 
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>

<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: " . $_COOKIE['user'];
}
//Outputs "John"
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>My HTML5 Web Document</title>
</head>
 <?php
 echo "Your name is " . $_SESSION['name'];
 require 'config.php'; 
echo '<center><img src="http://www.w3.org/html/logo/downloads/HTML5_Logo_64.png" /></center>'; 
  /*include*/require 'header.php';
  /*
  Author: Alen P
  Date: 31.8.2015.   
  */
    // Uses echo language construct to output the text "Test." to the browser.
    echo "<h1>Test.</h1>"; 
	$first_name = 'Alen'."</br>"."</br>";
	echo $first_name;
	$string = "Helping Develop is real cool";
	$string2 = 'Helping Develop is really great!';
	$int1 = 20;
	$int2 = 10;
	
	//booleans
	$boolean = true;
	$boolean2 = false;
	
	//arrays
	
	//objects
	
	//datatypes can be used together.
	
	$string = "10";
	$int = 20;
	$sum = $string + $int;
	
	//primjer kako napraviti da vrijednost varijable bude samostalna varijabla
	
	$a = "primjer";
	$primjer = "Text";
	echo $a ."</br>";
	echo $primjer ."</br>";
	
	echo $$a."</br>";
	
	//Atirhmetic Operators
 	$value1 = 5;
	$value1 = $value1 + 5;
	echo "Addition value: $value1 <br>";
	
	// Modulus %
	
	//Increment $var++
	
	//Decrement $var--
	
	//Assignment Operators
	
	$a = 6;
	$b = 4;
	$a = $b;
// $a += $b; == $a = $a + $b
	echo "A now contains: $a <br>";
	
	//comparison
	
	//True or False
	
	//Equal ==
	
	//Not equal != or <>
	
	//Greater or equal than >= less <=
	
	//Logical operators:
	
	/* and &&
		or ||
		no !=		
	*/	
		
	$a = 2;
		$b = $a++;
		echo "$b <br>";
	//File Decription: PHP - Array
	
	$arrayExample[0] = "Robert";
	$arrayExample[1] = "<a href='http://www.thephpbasics.com'>ThePHPBasics.com</a>";
	$arrayExample[2] = "John";
	$arrayExample[3] = 9;
	
	//Robert teaches basic PHP tutorial at ThePHPBasics,com
	
	echo "$arrayExample[0] teaches basic PHP tutorials at $arrayExample[1] <br>";
		
	//associative arrays
	
	$food = array ('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>150, 'Vegetables'=>50);
	
	echo $food['Pasta'];
	
	//print_r($food);	
	
	
	//multidimensional arrays
	/*
	+Healthy
	Salad
	Vegetable
	Pasta
	
	
	+Unhealthy
	Pizza
	Ice cream
	*/
	
	$food = array ('Healthy'=>
								array('Salad', 'Vegetables', 'Pasta'),
				   'Unhealthy'=>
								array('Pizza','Ice cream'));
								
	echo $food['Healthy'];
	
	//if/else (exactly equal to ==) (not equal !=)
	
	$first=10;
	$second=20;
	$third=30;
	
	if ($first<$second)
		{echo "<br> this is true";}
	else
		{echo "<br> this is false";}
		
	//elseif
	
	$var="alen";
	
	if($var=="steve")
		echo "<br>hey stevo";
	elseif($var=="brian")
		echo "<br>hey there brian";
	elseif($var=="alen")
		echo "<br>hey there alen!<br>";
	else
		echo "<br>you are not authorised!";
		
	//loop
		
	$i = 1; 
while ($i < 7) { 
  echo "The value is $i <br>"; 
  $i++; 
}
	
	$i = 5; 
do { 
   echo "The number is " . $i . "<br>"; 
   $i++; 
} while($i <= 7); 

for ($count = 10; $count>=1; $count--) 
{
	echo $count;
}
	
	//foreach loop
	
	$names = array("John", "David", "Amy"); 
foreach ($names as $index => $name) { 
   echo  '<br>'.$index, ".", $name, '<br>'; 
} 


	$today = 'Thu'; 

switch ($today) { 
  case "Mon": 
    echo "Today is Monday."; 
    break; 
  case "Tue": 
    echo "Today is Tuesday."; 
    break; 
  case "Wed": 
    echo "Today is Wednesday."; 
    break; 
  case "Thu": 
    echo "Today is Thursday."; 
    break; 
  case "Fri": 
     echo "Today is Friday."; 
     break; 
  case "Sat": 
     echo "Today is Saturday."; 
     break; 
  case "Sun": 
     echo "Today is Sunday."; 
     break; 
  default: 
     echo "Invalid day."; 
} 
	
	
	$day = 'Wed'; 

switch ($day) { 
  case 'Mon': 
    echo '<br>First day of the week<br>'; 
    break; 
  case 'Tue': 
  case 'Wed': 
  case 'Thu': 
    echo '<br>Working day<br>'; 
    break; 
  case 'Fri': 
    echo '<br>Friday!<br>'; 
    break; 
  default: 
    echo '<br>Weekend!<br>'; 
} 
	
	
	for ($i=0; $i<10; $i++) { 
  if ($i%2==0) { 
    continue; 
  } 
  echo $i . ' '; 
} 

	//functions
	
	function sayHello() { 
  echo "Hello! <br>"; 
} 

sayHello(); //call the function 

//Outputs "Hello!"

	//Default arguments
	
	function setCounter($num=10) { 
   echo "Counter is <br>".$num; 
} 
setCounter(42);  //Counter is 42 
setCounter();  //Counter is 10

	//return 
	
	function mult($num1, $num2) { 
  $res = $num1 * $num2; 
  return $res; 
} 

echo mult(8, 3); 
// Outputs 24
	
	function func($arg) {
$result = 0;
for($i=0; $i<$arg; $i++) {
$result = $result + $i;
}
return $result;
}
echo func(5);

	//    **PREDEFINED VARIABLES** 
	
	// $_SERVER
	
	echo $_SERVER['SCRIPT_NAME']; 
//Outputs "/testerpage.php" 

	echo $_SERVER['HTTP_HOST']; 
//Outputs "localhost" 

	// $_GET and $_POST in first.php
	
	// sessions - very first thing in the document before HTML tags
	
	// Cookies - before HTML tags
	
	// Manipulating Files
	
	/*$myfile = fopen("names.txt", "w");
	
	$txt = "John\n";
	fwrite($myfile, $txt);
	$txt = "David\n";
	fwrite($myfile, $txt);

	fclose($myfile);
	*/
	/* File contains:
	John
	David
	*/
	
	// Appending to a File
	
	/*$myfile = fopen($myfile, 'a');
	fwrite($myfile, "\nAdded text\n");
	fclose($myfile);
	*/
	
	// Appending to form
	
	if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}

/*$read = file('names.txt');
foreach ($read as $line) {
  echo $line .", ";
}
*/

// without last comma
echo '<br>Current names in file: ';
$read = file('names.txt');
$count = count($read);
$i = 1;
foreach ($read as $line) {
  echo $line;
  if($i < $count) {
    echo ', ';
  }
  $i++;
}


  ?>	
  <script language ="php">
	echo "<p>&copy;".date('Y')." Alen P</p>";
  </script>
  <?php
	echo "<p>&copy;".date('Y')." Alen P</p>";
  ?>
<body>
            
 <?php 
  print $sum ."</br>"."</br>"
 ;
 
 function getName() 
	{
		$name = 'Alex';
		echo $name;
	}
	getName() ."</br>";
	
 ?>
 </body>
 <!-- POST Variable (invisible to others, passwords) -->
 <form action="first.php" method="post">
  <p>Name: <input type="text" name="name" /></p>
  <p>Age: <input type="text" name="age" /></p>
  <p><input type="submit" name="submit" value="Submit" /></p>
</form>
<!-- GET Variable (visible, bookmarks) -->
<form action="actionGet.php" method="get">
  <p>Name: <input type="text" name="name" /></p>
  <p>Age: <input type="text" name="age" /></p>
  <p><input type="submit" name="submit" value="Submit" /></p>
</form>
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />

 </html>
