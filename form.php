<?php
$user="Hemant";
$pas="12345678";
$username=$_POST['username'];
$pass=$_POST['pass'];
if ($username==$user and $pass==$pas)
{
    echo '<h1 style=text-align:center;color:green;background-color:black;weidth: 50px;>"Login Succesful"<h1>';
}
else
{
    echo "<marquee><h1 style=color:red;background-color:black;>Invalid username Or Password</h1></marquee>";
}