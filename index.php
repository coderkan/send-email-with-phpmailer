<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Send E-Mail With PHPMailer</title>
	
</head>
<body>
	<div >
		<form role="form" action="sendmail.php" method="post" style="text-align:center;margin-top:50px;" >
			<div>
				<input id='email' type="email" name="_mail"  placeholder="E-mail">
			</div>
			<br>
			<div>
				<input id = 'subject' type="text" name="_subject" placeholder="Subject">
			</div>
			<br>
			<textarea id='mailBody' name="_body" rows="12"></textarea>
			<br>
			<button  type="submit" name="submit" >Send E-mail</button>
		</form>
	</div>
</body>
</html>