<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
    Enter the number: <input type="number" name="num" id="num" placeholder="Enter a number">
    <input type="submit" value="SUBMIT">
    </form>
    <?php
    // number0
    $n=$_GET['num'];
    switch ($n) { 

        // number 0
        case "0" :
        for ($i=0; $i<9; $i++){
            if ($i==0 || $i==8){
                for ($j=0;$j<9;$j++){
                    echo "*";
            }
            echo"<br>";   
        }
        else {
            for ($j = 0; $j < 9; $j++) {
                if ($j == 0 || $j == 8)
                    echo " *";
                    else
                    echo "&nbsp; ";
                }
                echo "<br>";
            }
        }
        break;
        echo "<br><br><br><br>";
        // Number 1
        case "1":
        for ($i = 0; $i < 9; $i++) {
            echo "*<br>";
        }
        break;
        echo "<br><br><br><Br>";
    // number 2
        case "2":
    for ($i = 0; $i < 9; $i++) {
        if ($i == 0 || $i == 4 || $i == 8) {
            for ($j = 0; $j < 9; $j++) {
                echo "*";
            }
            echo "<br>";
        } else if ($i == 1 || $i == 2 || $i == 3) {
            for ($j = 0; $j < 9; $j++) {
                if ($j != 8) {
                    echo " &nbsp;";
                } else {
                    echo "*<br>";
                }
            }
        } else {
            echo "*<br>";
        }
    }
    break;
    echo "<br><br><Br><Br>";
    // nummber3
    case "3":
    for ($i = 0; $i < 9; $i++) {
        if ($i == 0 || $i == 4 || $i == 8) {
            for ($j = 0; $j < 9; $j++) {
                echo "*";
            }
            echo "<br>";
        } else {
            for ($j = 0; $j < 9; $j++) {
                if ($j != 8) {
                    echo " &nbsp;";
                } else {
                    echo "*<br>";
                }
            }
        }
    }
    break;
    echo "<br><br><Br><Br>";
    
    // number4
    case "4":
    for ($i = 0; $i < 9; $i++) {
        if ($i < 4) {
            
            for ($j = 0; $j < 9; $j++) {
                if ($j == 0 || $j == 8)
                echo " *";
                else
                echo "&nbsp; &nbsp;";
            }
            echo "<br>";
        } elseif ($i == 4) {
            
            for ($j = 0; $j < 9; $j++)
            echo "*&nbsp;";
            
            echo "<br>";
        } else {
            
            for ($j = 0; $j < 9; $j++) {
                if ($j == 8)
                echo " *";
                else
                echo "&nbsp; &nbsp;";
            }
            echo "<br>";
        }
    }
    break;
    echo "<br><br><bR><br>";
    // number5
    case "5":
    for ($i = 0; $i < 9; $i++) {
        if ($i == 0 || $i == 4 || $i == 8) {
            for ($j = 0; $j < 9; $j++) {
                echo "*";
            }
            echo "<br>";
        } 
        elseif($i==1 || $i==2 || $i==3){
            echo "*<br>";
        }
        else {
            for ($j = 0; $j < 9; $j++) {
                if ($j != 8) {
                    echo " &nbsp;";
                } else {
                    echo "*<br>";
                }
            }
        }
    }
    break;
    echo "<br><br><br><Br>";
    // number6
    case "6":
    for ($i=0; $i < 9; $i++) { 
        if ($i == 0 || $i == 4 || $i == 8) {
            for ($j = 0; $j < 9; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        elseif ($i==1 || $i==2 || $i==3)
        echo "* <br>";
        else {
            for ($j = 0; $j < 9; $j++) {
                if ($j == 0 || $j == 8)
                echo " *";
                else
                echo " &nbsp;";
            }
            echo "<br>";
        }
    }
    break;
    echo "<br><br><br><br>";
    // number7
    case "7":
    for ($i=0; $i<9; $i++){
        if ($i==0){
            for ($j=0;$j<9;$j++){
                echo "*";
            }
            echo"<br>";
        }
        else {
            for ($j = 0; $j < 9; $j++) {
                if ($j == 8)
                echo " *";
                else
                echo "&nbsp; ";
            }
            echo "<br>";
        }
    }
    break;
    echo "<br><br><br><br>";
    // number8
    case "8":
    for ($i=0; $i<9; $i++){
        if ($i==0 || $i==4 || $i==8){
            for ($j=0;$j<9;$j++){
                echo "*";
                }
            echo"<br>";   
        }
            else {
                for ($j = 0; $j < 9; $j++) {
                    if ($j == 0 || $j == 8)
                    echo " *";
                    else
                    echo "&nbsp; ";
                }
                echo "<br>";
            }
    }
        break;
        echo "<br><br><br><br>";
        // number9
        case "9":
        for ($i=0; $i<9; $i++){
            if ($i==0 || $i==4 || $i==8){
                for ($j=0;$j<9;$j++){
                    echo "*";
                }
            echo"<br>";   
        }
        elseif ($i==1 || $i==2 ||$i==3) {
            for ($j = 0; $j < 9; $j++) {
                if ($j == 0 || $j == 8)
                echo " *";
                else
                echo "&nbsp; ";
            }
            echo "<br>";
        }
        else {
            for ($j = 0; $j < 9; $j++) {
                if ($j != 8) {
                    echo " &nbsp;";
                } else {
                    echo "*<br>";
                }
            }
        }
    }
    break;
}
    ?>
</body>

</html>