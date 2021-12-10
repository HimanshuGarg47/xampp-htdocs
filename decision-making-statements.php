<?php
    // PHP conditional statemnts
    $a = 14.0;
    $b = 15.5;
        // if statement
        echo " if condition statemnt <br>";
    if($a < $b)
    {
        echo $a . " is less than " . $b . "<br>";
    }

    echo "<br><br><br>";
    








    // if elseif else statement
    echo "if elseif else statement <br>";
    $std1 = array(99,88,77,56,43);
    $sum = 0; // total = 500
    foreach($std1 as $marks)
    {
        $sum += $marks;
    }
    if($sum > 450)
    {
        $grade = "A+";
        echo "You are brilliant student <br>";
    }
    elseif($sum > 400)

   { 
       $grade = "A";
       echo "Excellent student <br>";}

    elseif($sum > 350)
    {
        $grade = "B+";
        echo "Good student <br>";}

    else

    {
        $grade = "B";
        echo "Average student <br>";}

    // end




    echo "<br> <br> <br>";
    /* if else statement */
    echo "if else statement <br>";
    if($sum == 500)
    {
        echo "you got merit <br>";
    }
    else{
        echo "Sorry! But keep it up <br>";
    }



    echo "<br> <br> <br>";
    // switch statemnet
    echo "switch statement <br>";
    switch($grade){
        case "A+":
            echo "grade A+ <br>";
            break;
        case "A":
            echo "grade A <br>";
            break;
        case "B+":
            echo "grade B+ <br>";
            break;
        default:
            echo "grade B <br>";
    }












    /* Loops */
    echo "<br> <br> <br>For loop<br>";
    // For loop
    for($i = 5;$i >= 0;$i--)
    {
        for($j = $i-1;$j>= 0;$j--)
        {
            echo "*";
        }
        echo "<br>";
    }


    
    // do while
    echo "<br> <br> <br>Do while <br>";
    $i = 5;
    $j = $i;
    do{
        
        $i--;
        echo "<br>";
    
    do {
       echo "*";
        $j--;
    }while($j >= 0);

    }while($i>=0);






    // while
    echo "<br> <br> <br> While loop <br>";
    $i = 1;
    while($i<5)
    {
        echo $i++ . "<br>";
    }



    // associate array
    echo "<br> <br> <br> Associate array <br>";



    $dict = array('std1'=>'Himanshu','std2'=>'Hitesh Jain','std3'=>'Jaskirat');
    echo "Student 1 name is " . $dict['std1'] . "<br>";



    
    $names = array(); // single array
    $index = 0;
    foreach($dict as $std => $name){ // storing names in single array
        $names[$index++] = $name;
    }

    foreach($names as $name)
    {
        echo $name . "<br>";
    }
?>