<?php 
echo "Hello world";
function add($first,$second)
{
    return $first+$second;
}

function mulitply($first,$second)
{
    return $first*$second;
}
function division($a,$b){
    return $a/$b;
}

function modulus($a,$b)
{
    return $a%$b;
}

function minus($a,$b)
{
    return $a-$b;
}

function exponential($a,$b)
{
    return $a**$b;
}

/* Comparison */ 


# Here echo command is used to print
echo add(4,5);
echo "<br>";
$a = 10;
$b = 10;
#double equal to for comparison
if($a == $b)
    echo "$a and $b are equal" . "<br>";
else if($a != $b)
    echo "$a and $b are not equal" . "<br>";

# === operator  
if($a === $b)
 echo "$a and $b have same value and data type <br>";


 if($a !== $b)
  echo "$a and $b have not either same value or same data type <br>";

  if($a < $b)
   echo "$a is less than $b <br>";

   if($a > $b)
    echo "$a is larger than $b <br>";

    if($a <= $b)
    echo "$a is less than or equal to $b <br>";

    if($a >= $b)
    echo "$a is larger than or equal to $b <br>";

    if($a <=> $b) 
    echo "Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y.<br>";

# Increment and Decrement Operator
    #Pre Dec. and Incre 

echo $a . " is incremented to ". ++$a . "<br>" ;


echo $a . " is decremented to ". --$a . "<br>";

# Post increment decrement operator
    # Post increment
echo "a++ leads to increment of a <br>" . $a++ . " is current value of a. Now it is incremented to $a <br>";
    # Post decrement
echo "a-- leads to decrement of a <br>" . $a-- . " is current value of a. Now it is decremented to $a <br>";







#PHP Logical Operators -> and , or, xor , && , || , !


    # and
$a = 0 ; $b = 2;
$a and $b?print("$a $b are same, Hence , Both are equal"):print("Both are not equal");
    
echo "<br> <br>";


    # or operator
echo " 'or' operator return 1 or true if either value of any var is greater than 0 <br>";
$a or $b?print("Either or Both are positive"):print("Both are negative or 0");

echo "<br> <br>";
    # xor operator
echo "<br> <br> xor operator return True if either 'x' or 'b' is true, but not both <br>";
$a xor $b?print("True"):print("False");

echo "<br> <br>";







# PHP string operator -> '.' and '.='
    # . operator
$str1 = "I love ";
$str2 = "my India";
echo "'.' operator concatenate two or more strings str1.str2 <br>" . $str1 . $str2;

echo "<br> <br>";

    # .= opera.
echo "'.=' operator concatenate two or more strings str1.=str2 <br>" . $str1 .= $str2;




echo "<br> <br>";
# ??	Null coalescing
$arr = array(0,1,2);
$x=$arr[5]??77;
echo "x = expr1 ?? expr2 Returns the value of x.The value of x is expr1 if expr1 exists, and is not NULL.<br>
If expr1 does not exist, or is NULL.<br> Here x = arr[5]??77 assigns 77 because arr[5] is not exist That's why  Value of x is $x";




?>

