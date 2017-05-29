<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:Febri Sukmawati|Latihan 4:.</title>
</head>

<body>
  <table border="1" cellpadding="8">
    <tr>
      <td><?php

	
	$text[0]="PHP pertama kali dibuat oleh Rasmus Lerdorf pada tahun 1995.";
	$text[1]="Pada waktu itu PHP bernama FI (Form Interpreted). Pada saat tersebut PHP";
	$text[2]="adalah sekumpulan script yang digunakan untuk mengolah data form dari web";
	
	
	echo"<b> Menggunakan fungsi str_replace:</b><br>
	".str_replace(" ","",$text[0])."<br>
	".str_replace(" ","",$text[1])."<br>
	".str_replace(" ","",$text[2])."<br>
	
	<b><br> Menggunakan proses perulangan:<br></b>";
	
	for($y=0;$y<=2;$y++)
	{	$x=0;
		while ($x<strlen($text[$y]))
		{
			if(substr($text[$y],$x,1)<>" ")
			{
			echo substr($text[$y],$x,1);
			}
			$x++;
		}
		echo"<br>";
	}
	
	
	?></td>
    </tr>
  </table>
</p>
<p>&nbsp;</p>
<table border="1" cellpadding="8">
  <tr>
    <td><?php

	$text[0]="<b><u>PHP</b></u> pertama kali dibuat oleh <b><i>**Rasmus Lerdorf**</i></b> pada tahun 1995.";
	$text[1]="Pada waktu itu <b><u>PHP</b></u> bernama FI (Form Interpreted). Pada saat tersebut <b><u>PHP</b></u>";
	$text[2]="adalah sekumpulan script yang digunakan untuk mengolah data form dari web";
	
	
		echo"
	".str_replace(" ","",$text[0])."<br>
	".str_replace(" ","",$text[1])."<br>
	".str_replace(" ","",$text[2])."<br>"
	
	
	
?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" cellpadding="8">
  <tr>
    <td><?php

	$text[0]="PHP <b>PERTAMA</b> kali <b>DIBUAT</b> oleh <b>RASMUS</b> Lerdorf <b>PADA</b> tahun <b>1995.</b>";
	$text[1]="Pada <b>WAKTU</b> itu <b>PHP</b> bernama <b>FI</b> (Form <b>INTERPRETED).</b> Pada <b>SAAT</b> tersebut <b>PHP</b>";
	$text[2]="adalah <b>SEKUMPULAN</b> script <b>YANG</b> digunakan <b>UNTUK</b> mengolah <b>DATA</b> form <b>DARI</b> web";
	
	echo $text[0];
	echo "<br>";
	echo $text[1];
	echo "<br>";
	echo $text[2];
	
	
	?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table border="1" cellpadding="8">
  <tr>
    <td><?php

	$text[0]="PHP pertama kali dibuat oleh Rasmus Lerdorf pada tahun 1995.";
	$text[1]="Pada waktu itu PHP bernama FI (Form Interpreted). Pada saat tersebut PHP";
	$text[2]="adalah sekumpulan script yang digunakan untuk mengolah data form dari web";
	
	
	echo $text[0]='PHP';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='pertama';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='kali';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='dibuat';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='oleh';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='Rasmus';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='Lerdorf';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='pada';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='tahun';echo"(";echo strlen($text[0]);echo")";
	echo $text[0]='1995.';echo"(";echo strlen($text[0]);echo")";
	
	
	echo"<br>";
	echo $text[1]='Pada';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='waktu';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='itu';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='PHP';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='bernama';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='FI';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='(Form';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='Interpreted).';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='Pada';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='saat';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='tersebut';echo"(";echo strlen($text[1]);echo")";
	echo $text[1]='PHP';echo"(";echo strlen($text[1]);echo")";
	
	
	echo"<br>";
	echo $text[2]='adalah';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='sekumpulan';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='script';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='yang';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='digunakan';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='untuk';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='mengolah';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='data';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='form';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='dari';echo"(";echo strlen($text[2]);echo")";
	echo $text[2]='web';echo"(";echo strlen($text[2]);echo")";
	
	
	?></td>
  </tr>
</table>

</body>
</html>
