<?php
$usr=$_POST['username'];
$pas=$_POST['pass'];
if($usr=="Hemu" && $pas==1234)
{
    echo "<h1 style='text-align:center;background-color:yellow;'>Your Account Status<h1>"."<br>";
}
else
{
    echo "<h1 style='text-align:center'>Welcome New User How are you"."<br>";
    echo "<br>"."Select Your Plan"."<br>";
    echo "<br>"."<select><option>179  unlimted call 50 message perday upto 28 day</option><option>199 unlimted call 1.5 GB data per day valid to 28day</option><option>399 unlimted call 2GB data perday 100 message daily valid to 3month</option><option>799 2.5GB per day unlomted call daily 100 data valid to 6 month </option> <option> 2999 Daily 3GB data + unlimted call + unlimted data upto 1year</option></select>";
}
?>