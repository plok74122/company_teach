<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>設定加法數學考卷參數</title>
</head>
<body>
<form id="condition" action="add_test.php" method="post">
題數：<input type="number" name="amount" id="amount" min="1"><div id="alertamount">123</div>
位數：<input type="number" name="digits" min="1"><div id="alertdigits">321</div>
<input type="button" value='click' onclick="clickbutton()">
</form>

</body>

</html>
<script>
    document.bgColor="pink";
    function clickbutton()
    {
        var amount = document.getElementsByName("amount")[0].value;
        var digits = document.getElementsByName("digits")[0].value;
        if(amount=="")
        {
            document.getElementById('alertamount').innerHTML='請指定題數';
        }
        else
        {
            document.getElementById('alertamount').innerHTML='';
        }
        if(digits=="")
        {
            document.getElementById('alertdigits').innerHTML='請輸入位數';
        }
        else
        {
            document.getElementById('alertdigits').innerHTML='';
        }

        if(amount!="" && digits!="")
        {
            document.getElementById('condition').submit();
        }
    }
</script>