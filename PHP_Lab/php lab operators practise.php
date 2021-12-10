<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

    }

    ?>
    <table border="1">
        <thead>
            <tr>
                <form method="post">
                    <th>Value A <input type="number" name="a" placeholder="Enter value of a" value="<?php echo $a; ?>"></th>
                    <th>Value B <input type="number" name="b" placeholder="Enter value of b" value="<?php echo $b; ?>"> </th>
                    <th><input type="submit" value="Submit"></th>
                </form>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> Arithmetic plus </td>
                <td colspan="2"> <?php echo $a + $b; ?> </td>
            </tr>
            <tr>
                <td> Arithmetic minus </td>
                <td colspan="2"> <?php echo $a - $b; ?> </td>
            </tr>
            <tr>
                <td> Arithmetic multiplication </td>
                <td colspan="2"> <?php echo $a * $b; ?> </td>
            </tr>
            <tr>
                <td> Arithmetic division </td>
                <td colspan="2"> <?php echo $a / $b; ?> </td>
            </tr>
            <tr>
                <td> Arithmetic modulus </td>
                <td colspan="2"> <?php echo  $a % $b; ?> </td>
            </tr>
            <tr>
                <td> Arithmetic Exponential </td>
                <td colspan="2"> <?php echo $a ** $b; ?> </td>
            <tr>
                <td> Comparison identical</td>
                <td colspan="2"> <?php echo var_dump($a === $b); ?> </td>
            </tr>
	    <tr>
                <td> Comparison less than</td>
                <td colspan="2"> <?php echo var_dump($a < $b); ?> </td>
            </tr>
         <tr>
                <td> Comparison greater than</td>
                <td colspan="2"><?php echo var_dump($a > $b); ?> </td>
            </tr>
         <tr>
                <td> Comparison less than equal to </td>
                <td colspan="2"><?php echo var_dump($a <= $b); ?> </td>
            </tr>
         <tr>
                <td> Comparison greater than equal to</td>
                <td colspan="2"> <?php echo var_dump($a >= $b); ?> </td>
            </tr>
            <tr>
                <td> Comparison Non identical </td>
                <td colspan="2"> <?php echo var_dump($a == $b); ?> </td>
            <tr>   
                <td> Comparison spaceship</td>
                <td colspan="2"> <span id="iden"><?php echo ($a <=> $b); ?></span> </td>
            </tr>
            </tr>
        </tbody>
    </table>
</body>

</html>