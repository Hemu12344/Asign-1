<?php
$score=101;
if($score<60)
{
    echo "Your grade is F"."<br>"."your score is $score";
}
elseif($score>=60 and $score<=70)
{
    echo "Your grade is 'D'"."<br>"."your score is $score";
}
elseif($score>=71 and $score<=80)
{
    echo "Your grade is 'C'"."<br>"."your score is $score";
}
elseif($score>=81 and $score<=90)
{
    echo "Your grade is 'B'"."<br>"."your score is $score";
}
elseif($score>=91 and $score<=100)
{
    echo "Your grade is 'A'"."<br>"."Your grade is $score";
}
else
{
    echo " Please fill right score";
}