<html>
<head>
<title>PHP Send HTML Email Template</title>
<!--<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">-->
</head>
<body>
<div id='main'><center><h1>PHP Send HTML Email Template</h1></center>
<div id='container' >
<h2>Send a Greeting to your closed ones....!!</h2>
<hr>
<form id="checkinput" action="index.php" method='POST'>
<div> <div id="book_container" class="card_container1" class>
        <div class ='username'>
            <b>
                UserName:</b>
            <input type="text" id='name' value="name">
        </div>

</div>
<div id="email_input">
<label><b>Enter Email:</b></label>
<input id="email" type='email' maxlength="50" name='mail_receiver'/></div>
<input type='submit' id='submit' name='send_greet' value='Send Greeting'/>
</div>
    </form>

</div>
</body>
</html>