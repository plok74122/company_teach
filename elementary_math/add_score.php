<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>加法成績</title>
</head>
<body>
<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $answer = $_POST['answer'];
    $amount = count($num1);
    $answer_correct = 0;
  //  print_r($num1);
  //  print_r($num2);
  //  print_r($answer);
    for($i=0 ; $i < count($num1) ; $i++)
    {
  //      echo $num1[$i]+$num2[$i]."<br>".$answer[$i]."<br>";
        echo "第".($i+1)."題".$num1[$i]."+".$num2[$i]."=".$answer[$i]."(".($num1[$i]+$num2[$i]).")";
        if($num1[$i]+$num2[$i] == $answer[$i])
        {
            echo "正確<br>";
            $answer_correct++;
        }
        else
        {
            echo "錯誤<br>";
        }
    }
    echo (($answer_correct/$amount)*100)."分";
?>
</body>
</html>