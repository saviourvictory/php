<!DOCTYPE html>
<HTML>
<HEAD>
    <TITLE>function</TITLE>

<body align="center">
    <?php
    echo "<h1>Airthmatic</h1>";
    echo "MUDIT SHARMA";
    $a = 3;
    $b = 7;
    $x;
    $y;
    function sum()
    {
        global $a, $b, $x;
        $x = $a + $b;
    }
    function multiplication()
    {
        global $a, $b, $y;
        $y = $a * $b;
    }
    echo " <h2>This is my first code for addition of 2 variables</h2>";
    sum();
    echo "<br><b>The sum of $a and $b is : $x</b></br>";
    var_dump($x);
    echo " <h2>This is my first code for multiplication of 2 variables</h2>";
    multiplication();
    echo "<br><b>The multiplication of $a and $b is : $y</b></br>";
    var_dump($y);
    ?>
</body>
</HEAD>
</HTML>