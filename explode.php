<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Explode:.</title>
</head>

<body>
<?php 
	echo"<br>";
	$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
	$pieces = explode(" ", $pizza);
	echo "$pieces[0] <br>"; //piece1
	echo "$pieces[1] <br>"; //piece2
	//contoh 2
	$data = "foo:*:1023:1000::home/foo:/bin/sh";
	list($user,$pass,$uid,$git,$gecos,$home,$shell)= explode(":",$data);
	echo $user; //foo
	echo $pass; //*
echo"</b>";
?>
</body>
</html>
