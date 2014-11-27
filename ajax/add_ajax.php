<?php
//ob_clean();
ini_set('display_errors', '0');
$num1 = $_POST['num1'];
$num2 =$_POST['num2'];
$answer =$_POST['answer'];
if( $num1+$num2 == $answer)
{
    echo "1";
}
else
{
//    echo $_POST['num1']."_".$_POST['num2']."_".$_POST['answer'];
    echo "0";
}
?>