<?php
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
       403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
       404 => array('404 Not Found', 'The URL requested was not found on this server.'),
       405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
       408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
       500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
       502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
       504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
       $message = 'Please supply a valid status code.';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body style="align:center;">
<center>
<table width="auto" style="position:responsive"><tr><td colspan="3"><p style="text-shadow:1px 1px 1px rgba(255,163,240,1);font-weight:bold;color:#2A1FC2;background-color: ;border: 5px groove #f7b3e5;letter-spacing:2pt;word-spacing:4pt;font-size:50px;text-align:center;font-family:georgia, serif;line-height:1;width:100%;">
MILK CO-OPERATION OF TELANGANA STATE
	</p></td></tr>
<tr><td><p style="text-shadow:1px 1px 1px rgba(255,163,240,1);font-weight:bold;color:#2A1FC2;background-color: ;border: 5px groove #f7b3e5;letter-spacing:2pt;word-spacing:4pt;font-size:25px;text-align:center;font-family:georgia, serif;line-height:1;width:100%;">
Village: KADAPARTHY
	</p></td>
<td><p style="text-shadow:1px 1px 1px rgba(255,163,240,1);font-weight:bold;color:#2A1FC2;background-color: ;border: 5px groove #f7b3e5;letter-spacing:2pt;word-spacing:4pt;font-size:25px;text-align:center;font-family:georgia, serif;line-height:1;width:100%;">
Mandal: NAKREKAL
	</p></td>
<td><p style="text-shadow:1px 1px 1px rgba(255,163,240,1);font-weight:bold;color:#2A1FC2;background-color: ;border: 5px groove #f7b3e5;letter-spacing:2pt;word-spacing:4pt;font-size:25px;text-align:center;font-family:georgia, serif;line-height:1;width:100%;">
District: NALGONDA
	</p></td></tr>
	<tr height="20px"></tr>
</table>
<div class="container" >
<br>
<table style="width:60%; background:url(/milk/images/robot.png) 100% no-repeat; align:center;">
<tr><td><h1><?php echo $title;?></h1><br></td></tr>
<tr><td><h5><?php echo $message;?></h5><br></td></tr>
<tr><td><h6>That’s all we know.</h6><br></td></tr>
<tr style="width:100%; height:100%px;"><td><h4><a href="/milk/index.php" style="background:red; width:100%; height:100%px; color:white">Home</a></h4><br></td></tr>
</table>
<?php include('footer.php');?></div>
</body>
</head>
</html>
