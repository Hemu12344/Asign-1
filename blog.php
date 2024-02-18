<?php
$strr=$_POST['txt'];
$main=str_word_count($strr);
if($main>50)
{
    echo "limit exceed ";
}
else{
    echo "write more word";
}
?>