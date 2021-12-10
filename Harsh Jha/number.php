<?php 
function print7starvertical1col()
{
    for($i= 0;$i<7;$i++)
    {
        echo "*<br>";
    }
}



function print8verticalstartparallel(){
    for($i= 0;$i<8;$i++)
    {
        echo "*";
        for($j = 0;$j<22;$j++)
        {
            echo "&nbsp";
        }
        echo "*<br>";

    }
}





function printstar18horiz(){
    for($i= 1;$i<=16;$i++)
    {
       if($i%2!=0)
        echo "*";
        else
        echo"&nbsp";
    }
}
function space(){
    for($i= 0;$i<18;$i++)
    echo"<br>";
}

function print17space7star()
{   
    for($j=0;$j<7;$j++)
    {for( $i= 0;$i<24;$i++)
    {
        echo"&nbsp";
    }
    echo"*<br>";}
}

function print17space(){
    for($i= 0;$i<17;$i++)
    echo"&nbsp";
}


function Twodigit_print17space1star()
{   
    for($j=0;$j<1;$j++)
    {for( $i= 0;$i<24;$i++)
    {
        echo"&nbsp";
    }
    echo"*";
}
}


function twodigit_print1verticalstartparallel(){
    for($i= 0;$i<1;$i++)
    {
        echo "*";
        for($j = 0;$j<23;$j++)
        {
            echo "&nbsp";
        }
        echo "*<br>";

    }
}

function horizontal_space()
{
    for($i=0;$i<10;$i++)
    {
        echo "&nbsp";
    }
}

function twodigit_10Number(){
 
        Twodigit_print17space1star();horizontal_space();
        printstar18horiz();
        for($j=0;$j<16;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
            twodigit_print1verticalstartparallel();

        }
        Twodigit_print17space1star();
        horizontal_space();
        printstar18horiz();

}


function twodigit_11Number(){
    for($j=0;$j<18;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
            Twodigit_print17space1star();
            echo "<br>";

        }
}

function twodigit_12Number(){
    Twodigit_print17space1star();horizontal_space();
        printstar18horiz();
    for($j=0;$j<8;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
            Twodigit_print17space1star();
            echo "<br>";

        }
        Twodigit_print17space1star();horizontal_space();
        printstar18horiz();

        for($j=0;$j<8;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
            
            echo "*<br>";

        }

        Twodigit_print17space1star();horizontal_space();
        printstar18horiz();

}

function twodigit_13Number(){
    Twodigit_print17space1star();horizontal_space();
        printstar18horiz();
    for($j=0;$j<8;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
            Twodigit_print17space1star();
            echo "<br>";

        }
        Twodigit_print17space1star();horizontal_space();
        printstar18horiz();

        for($j=0;$j<8;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
            Twodigit_print17space1star();
            echo "<br>";

        }

        Twodigit_print17space1star();horizontal_space();
        printstar18horiz();

}

function twodigit_14Number(){
    for($i=0;$i<9;$i++)
   { Twodigit_print17space1star();
    horizontal_space();
    twodigit_print1verticalstartparallel();}


    Twodigit_print17space1star();horizontal_space();
        printstar18horiz();

        for($j=0;$j<8;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
            Twodigit_print17space1star();
            echo "<br>";

        }

}

function twodigit_15Number(){
    Twodigit_print17space1star();horizontal_space();
        printstar18horiz();
    for($j=0;$j<8;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
           
            echo "*<br>";

        }
        Twodigit_print17space1star();horizontal_space();
        printstar18horiz();

        for($j=0;$j<8;$j++)
        {
            Twodigit_print17space1star();
            horizontal_space();
            Twodigit_print17space1star();
            echo "<br>";

        }

        Twodigit_print17space1star();horizontal_space();
        printstar18horiz();
}
/* 1 */
print17space7star();
print17space7star();

space();

/* 2 */ 

    printstar18horiz();
    print17space7star();
    printstar18horiz();
    echo"<br>";
    print7starvertical1col();
    printstar18horiz();

/* */
space();
/* 3*/ 
printstar18horiz();
print17space7star();
printstar18horiz();
print17space7star();
printstar18horiz();

/* */
space();

/* 4 */
print8verticalstartparallel();
printstar18horiz();
print17space7star();

/* */

space();

/* 5 */
printstar18horiz();
print7starvertical1col();
printstar18horiz();
print17space7star();
printstar18horiz();
/* */

space();


/* 6 */
printstar18horiz();
print7starvertical1col();
printstar18horiz();
print8verticalstartparallel();
printstar18horiz();

/* 6 */
space();

/* 7 */
printstar18horiz();
print17space7star();
print17space7star();

/* 7 */
space();


/* 8 */
printstar18horiz();
print8verticalstartparallel();
printstar18horiz();
print8verticalstartparallel();
printstar18horiz();
/* 8 */
space();

/* 9 */
printstar18horiz();
print8verticalstartparallel();
printstar18horiz();
print17space7star();
/* 9 */
 space();

/* 10 */
twodigit_10Number();
/* 10 */

space();

/* 11 */
twodigit_11Number();






space();

/* 11 */
twodigit_12Number();



space();

/* 11 */
twodigit_13Number();



space();

/* 11 */
twodigit_14Number();


space();

/* 11 */
twodigit_15Number();





?>