<?php
$ammount=4999;
if($ammount>=5000)
{

    echo "<h1>Total ammount of purchase</h1>"."<h2>$ammount</h2>"."<br>";
    echo "<h2>Congratulation You get 10% is:</h2>".$discount=$ammount*10/100;
    echo "<h3><br>Your total ammount after discount</h3>".$ammount-$discount;
}
else
{
    echo "Your total ammount of purchase:".$ammount;
}