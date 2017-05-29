<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|str replace:.</title>
</head>

<body>
<?php
echo"<b>";
	$str= "Kampus saya adalah STEKOM";
	echo "$str<br>";
	$ganti = str_replace("saya","kami", $str);
	echo $ganti;
echo"</b>";
?>
</body>
</html>
