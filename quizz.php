<?php
$num=2;
$num1=2;
$ques=$_POST['answer1'];
$ques2=$_POST['answer'];
$right="hypertext markup language";
$right2="sever side scripting language";
if($ques==$right and $ques2==$right2)
{
    echo "Your all question is right"."<br>";
    echo "your total number is :"." " .$num+$num1;
}
elseif($ques==$right)
{
    echo "Question first is right"."<br>";
    echo $num="You get 2 mark";
}
elseif($ques2==$right2)
{
    echo "Question second is right"."<br>";
    echo $num1="You get 2 mark";
}
else
{
    echo "Try again";
}