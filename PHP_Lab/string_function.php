<!DOCTYPe html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    function length() // strlen() function
    {
        $a="Length function :";
        echo "1. ";
        echo $a;
        echo strlen("$a");
        echo "<br>";

    }
    function reverse() // strrev() function
    {
        $a="Reverse function";
        echo"2. ";
        echo $a ,": ";
        echo strrev("$a");
        echo "<br>";
    }
    function replace() // str_replace() function
    {
        $a="Replace function in php";
        echo"3. ";
        echo $a,": ";
        echo str_replace("php", "String", "$a");
        echo "<br>";
    }
    function position() // strpos() function
    {
        $a="Position function (gives the position of i)";
        echo"4. ";
        echo $a,": ";
        echo strpos("$a", "I" );
        echo "<br>";
    }
    function trim_function() // trim() function
    {
        $a="trim function";
        echo"5. ";
        echo $a,": ";
        echo trim("$a", "ton");
        echo "<br>";
    }
    function similartext() // similar_text() function
    {
        $a="hello world";
        $b="hello class";
        echo"6. ";
        echo "similat text function", ":";
        echo ("calculates the similarirty between $a and $b is " );
        echo similar_text("$a", "$b");
        echo "<br>";
    }
    function lower() // strtolower function
    {
        $a="LOWeR CASe";
        echo"7. ";
        echo $a,": ";
        echo strtolower("$a");
        echo "<br>";
    }
    function upper() // strtoupper function
    {
        $a="upper case";
        echo"8. ";
        echo $a,": ";
        echo strtoupper("$a");
        echo "<br>";
    }
    function first() // ucfirst function
    {
        $a="converts first letter to uppercase";
        echo"9. ";
        echo "ucfirst function: ";
        echo $a, " -> ";
        echo ucfirst("$a");
        echo "<br>";
    }
    function words() // ucwords function
    {
        $a="converts first letter of every word to uppercase";
        echo"10. ";
        echo "ucwords function: ";
        echo $a," -> ";
        echo ucwords("$a");
        echo "<br>";
    }
    Length();
    Reverse();
    Replace();
    Position();
    Trim_function();
    Similartext();
    Lower();
    Upper();
    first();
    Words();
    ?>
</body>
</html>
