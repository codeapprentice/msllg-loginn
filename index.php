<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="/library/js/md5.js"></script>
</head>
<body style='padding:20px;' >

<?php
//include("Login.php");
//$login = new Login();
//$output = "";
//$login->GenInterface($output);

include("MyApp.php");
$myapp = new MyApp();
$output = "";
$myapp->GenInterface($output);

print($output);
?>
</body>
</html>