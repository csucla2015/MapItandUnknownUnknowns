<html>
<head>
<style>
body 
{
background-image:url('paper.gif');
background-color:#cccccc;
}
</style>
</head>
<body>

<h1>Calculator</h1>
(Ver 1.4 1/14/2013 by Meet Bhagdev and Ajan Jayant)<br />
Type an expression in the following box (e.g., 10.5+20*3/25).
<p>
<form method="GET">
<input type="text" name="fname"><input type="submit" value="Calculate">
</form>
</p>
<ul>
<li>Only numbers and +,-,* and / operators are allowed in the expression.
<li>The evaluation follows the standard operator precedence.
<li>The calculator does not support parentheses.
<li>The calculator handles invalid input "gracefully". It does not output PHP error messages.
</ul>
Here are some(but not limit to) reasonable test cases:
<ol>
  <li> A basic arithmetic operation:  3+4*5=23 </li>
  <li> An expression with floating point or negative sign : -3.2+2*4-1/3 = 4.46666666667, 3+-2.1*2 = -1.2 </li>
  <li> Some typos inside operation (e.g. alphabetic letter): Invalid input expression 2d4+1 </li>
</ol>

<?php
/*Ver 1.4 Changes: Allowed for addition to explicitly mentioned positive numbers; rectified parse error generated
   by trailing sign; rectified multiple operation performance(-3.2+2*4-1/3); added "." character to end of error 
   message; enabled for trailing 0's in operation; enabled for division by signed integers
*/ 
$ctr=0;
if($_GET["fname"])
{
	$var ="";
	$var = $_GET["fname"]; 
	$flag = true;

	for ($i=0; $i < strlen($var) && $flag == true; $i++)
	{
		switch ($var[$i]){
			case "0" :
			case "1" :
			case "2":
			case "3":
			case "4":
			case "5":
			case "6":
			case "7":
			case "8":
			case "9":
				$flag = true;		
				break;

			case "*":
				if($i != strlen($var) -1)
				{
					if($var[$i+ 1] == "/" || $var[$i+ 1] == "*")
						$flag = false;
				}
				else
				{
					$flag = false;
				}
				break;
			case "/":
				if($i != strlen($var) -1)
				{
					if($var[$i+ 1] == "/" || $var[$i+ 1] == "*" || $var[$i+ 1] == "0")
						$flag = false;
				}
				else
				{
					$flag = false;
				}
				break;
			case "+":
				if($i != strlen($var) -1)
				{
					if($var[$i+ 1] == "+" || $var[$i+ 1] == "/" || $var[$i+ 1] == "*")
						$flag = false;
				}
				else
				{
					$flag =false;
				}
				break;

			case "-":
				if($i != strlen($var) -1)
				{
					if($var[$i+ 1] == "-" || $var[$i+ 1] == "/" || $var[$i+ 1] == "*")
						$flag = false;
				}
				else
				{
					$flag =false;
				}
				break;

			case " ":;// find a plus
				$j = i + 1;
				$space_flag = true;
				while($space_flag == true && j < strlen($var)) 
				{
					switch($var[$j]){
					case "0":
					case "1":
					case "2":
					case "3":
					case "4":
					case "5":
					case "6":
					case "7":
					case "8":
					case "9":
						$flag = false;
						$space_flag = false;
						break;
					case "+":
					case "-":
					case "*":
					case "/":
						$flag = true;
						$space_flag = false;
						break;
					default :
						break;
					}
					$j++;
				}	
				break;
			case ".":
				switch($var[$i+1]){
					case "0":
					case "1":
					case "2":
					case "3":
					case "4":
					case "5":
					case "6":
					case "7":
					case "8":
					case "9":
						$flag = true;
						break;
					default:
						$flag = false;
						break;
				}
				break;
			default:
				$flag = false;
		}
	}

	Echo "<html>";
	Echo "<title>HTML with PHP</title>";
	Echo "<h2>Result</h2>";

	if(!$flag)
		echo "Invalid input expression ".$var."." ;
	else 
	{	
		eval("\$ans= $var;");
		echo $var." = ".$ans;
	}
}

?>
</body>
</html>
