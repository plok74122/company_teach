<html>
<head>
<meta charset="UTF-8">
<title>設定加法數學考卷參數</title>
</head>
<body>

<input type="hidden" name="num1" value="15">15+
<input type="hidden" name="num2" value="20">20=
<input type="number" name="answer">
<input type="button" value='click' onclick="add_ajax()">
<div id='return'></div>
<script>
function add_ajax()
{
     var num1 = document.getElementsByName("num1")[0].value;
     var num2 = document.getElementsByName("num2")[0].value;
     var answer = document.getElementsByName("answer")[0].value;
//     alert('num1='+num1+'&num2='+num2+'&answer='+answer);
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        alert(xmlhttp.responseText);
            if(xmlhttp.responseText=='1')
            {
                //yes
                alert('答案正確');
//                document.getElementById("return").innerHTML='答案正確';
            }
            else
            {
                //no
//                document.getElementById("return").innerHTML='ERROR';
                alert('ERROR');
            }
//            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","add_ajax.php");
    xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;");
    xmlhttp.send('num1='+num1+'&num2='+num2+'&answer='+answer);
}
</script>