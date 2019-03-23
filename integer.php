<html>
<h2>php integer function</h2>
<body>


Square Root: <?php echo sqrt(25) . "<br>";?>

Expotential: <?php echo pow(2, 4) . "<br>";?>

Absolute Value: <?php echo abs(20-25) . "<br>";?>

Modulo: <?php echo fmod(10, 3) . "<br>";?>

Random Number: <?php echo rand() . "<br>";?>

Random Number: <?php echo rand(10, 80) . "<br>" ;?>

<?php
$flt =6.28; 
?>
Round: <?php echo round($flt, 1) . "<br>" ; ?>

Round Up: <?php echo ceil($flt) . "<br>" ; ?>

Round Down: <?php echo floor($flt) . "<br>". "<br>" ; ?>

<h2>How to check if a number is an Integer or a Float</h2>

<?php
$flt =11.38; 
$int= 30;
?>

<?php echo "Is {$flt} is an Integer?" . is_int($flt) . "<br>";   ?>
<?php echo "Is {$flt} is an Integer?" . is_int($int) . "<br>" . "<br>" ;   ?>


<?php echo "Is {$flt} is an Float?" . is_float($flt) . "<br>";   ?>
<?php echo "Is {$flt} is an Float?" . is_float($int) . "<br>" . "<br>";   ?>

<?php echo "Is {$flt} is an Number?" . is_numeric($flt) . "<br>";   ?>
<?php echo "Is {$flt} is an Number?" . is_numeric($int) . "<br>" . "<br>";   ?>

</body>
</html>