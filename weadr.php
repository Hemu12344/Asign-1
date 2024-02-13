<?php
$temp=$_POST['Tem'];
if($temp<0)
{
    echo "Snowfall start Temp is $temp";
}
elseif($temp<=20)
{
    echo "today is cold day";
}
elseif($temp<=25)
{
    echo "Normal temprature";
}
elseif($temp<=45)
{
    echo "It's a sunny day!";
}
else
{
    echo "Danger!!!!!Temprature??????";
}