<?php
$premium=$_POST['username'];
$premiump=$_POST['pass'];
if($premium=="Hemant" and $premiump=="Hemu1234@")
{
    echo "<h1>Welcome Premium user!</h1>";
}
else
{
    echo "<h1>Welcome Basic user!";
}