<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>加法考卷</title>
</head>
<body>
<form action="add_score.php" method="post">
<?php 
    for($i=0 ; $i < $_POST['amount']; $i++ )
    {
        echo create_question( $i+1  , create_number($_POST['digits']) , create_number($_POST['digits']));
    }
?>
<input type="submit">
</form>
</body>
</html>
<?php
    function create_number($digits)
    {
        for($n=0 ; $n < $digits; $n++ )
        {
            if($n==0){$min .= "1";}
            else{$min .= "0";}
            $max .= "9";
        }
        return rand($min,$max);
    }
    function create_question( $amount ,$num1 , $num2)
    {
        return "第".$amount."題.<input type='hidden' name='num1[]' value='".$num1."'>".$num1."+<input type='hidden' name='num2[]' value='".$num2."'>".$num2."=<input type='number' name='answer[]'><br>";
    }
?>