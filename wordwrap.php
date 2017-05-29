<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|wordwrap:.</title>
</head>

<body>
<?php
echo"<b>";
$text="The quick brown fox jumped over the lazy dog.";
$newtext=wordwrap($text, 20, "<br><br>");
echo $newtext;
echo"</b>";
?>
</body>
</html>
