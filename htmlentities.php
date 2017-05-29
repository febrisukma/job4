<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|htmlentities:.</title>
</head>

<body>
<?php
echo"<b>";
	$str = "A 'quote' is <b>bold</b>
	<a href=www.stekom.ac.id> stekom </a>";
	//Outputs: A 'quote' is <b>bold</b>
	echo"Sebelum: $str <br>";
	echo htmlentities($str);
echo"</b>";
?>
</body>
</html>
