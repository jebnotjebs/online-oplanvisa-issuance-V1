<?php
//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode,$passwd){
    $url = 'https://www.itexmo.com/php_api/api.php';
    $itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
    $param = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($itexmo),
        ),
    );
    $context  = stream_context_create($param);
    return file_get_contents($url, false, $context);
}
//##########################################################################
if($_POST){
    $name = $_POST["name"];
    $number = $_POST["client_num"];
    $message = $_POST["message"];
    $api = "TR-OPLAN814171_EGWJL";
    $api_pass = "sf7k25)%7z";
    $text = $name. ": " .$message;
  
    $result = itexmo($number, $message, $api, $api_pass);
    if ($result == ""){
        
    echo "iTexMo: No response from server!!!
    Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
    Please CONTACT US for help. ";	
    }else if ($result == 0){
    echo "Message Sent!";
    }
    else{	
    echo "Error Num ". $result . " was encountered!";
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
           <form method="post" action="sms.php">
           <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">name</label>
                <input type="text" maxlength="10" class="form-control" id="name" name="name" placeholder="enter your name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Client Number</label>
                <input type="number" maxlength="11" class="form-control" id="number" name="client_num" placeholder="enter number as 09" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="text" name="message" rows="5"  placeholder="enter you message here" onkeyup="countChar(this)"  required></textarea>
            </div>
            <p class="text-right" id="charNum">85</p>
            <button type="submit" class="btn btn-success">Send</button>
           </form>
    </div>

</body>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script>
    function countChar(val){
        var len = val.value.length;
        if(len >= 85){
            val.value = val.value.substring(0,85);
        }
        else{
            $('#charNum').text(85 - len);
        }
    };
</script>
</html>