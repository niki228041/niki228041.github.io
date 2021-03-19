<HTML>
<HEAD>
	<meta charset="utf-8">
	<title> Сайт </title>
	
	
	
	<script>
	window.onload = function()
	{
	setInterval(clockPainting, 1000);
	}
	</script>
	
	
	
	<style>
	.shadowtext{
	    text-shadow: 1px 3px 2px white, 0 0 1em red;
		color: #210042;
		font-size: 2em;
	}
	</style>
</HEAD>
    <BODY background="bg.jpg">
	
    <table border="1" align="center" cellpadding="10" >
   
    <tr>
	    <td background="bg-3.jpg" colspan="2" height="150" align="right" hspace="5">
	    <font size="5" align="middle"><h1 class="shadowtext">Сайт wed-студії "Web-DECO"<h1></font>
    </tr>
	
	<font size="4"><b>
	<a href="#">Головна</a>&nbsp;&nbsp;
	<a href="#">Photo галерея</a>&nbsp;&nbsp;
	<a href="#">Телеон</a>&nbsp;&nbsp;
	<a href="#">Статистика</a>&nbsp;&nbsp;
	<a href="#">Зареєстровані</a>&nbsp;&nbsp;
	</b></font>
	
	<tr>
	    <td width="30%" valign="top" >
<center><canvas id="canvas" height="120" width="120"></canvas></center>
<hr>
		
		<font size="5" color="navy"><h2>Новини</h2></font>
		    <font size="5">
		<ul>
		    <li><a href="#">Сайт будівельної компанії</a></li>
		    <li><a href="#">Сайт TM "Новашкола"</a></li>
			<li><a href="#">Редизацн сацту classno.com.ua</a></li>
			<li><a href="#">Розробка CMS для Metro Cash and Carry</a></li>
			<li><a href="#">Сайт-візитка дизацнера інтерцецсів</a></li><br>
			<p align="right"><a href="#">інші...</a></p>
		</ul>
		</font>
	<hr>
<H1 align="center"><font color="green">Реєстрація</font></H1>
<form action="forma.php" method="post" onsubmit="return send();">
<TABLE align="center" bgcolor="#ccc">
<TR>
<TD><font color="green">Прізвище</font>:</TD>
<TD><input type="text" size="10" maxlength="20" name="name2"></TD>
</TR>
<TR>
<TD><font color="green">Імя</font>:</TD>
<TD><input type="text" size="10" maxlength="20" name="name1"></TD>
</TR>
<TR>
<TD><font color="green">E-mail</font>:</TD>
<TD><input type="text" size="10" maxlength="20" name="email"></TD>
</TR>
<TR>
<TD><font color="green">Пароль</font>:</TD>
<TD><input type="text" size="10" maxlength="20" name="password"></TD>
</TR>
</TABLE>

<p align="center">
<input type="submit" value="Зареєструватися">
<input type="reset" value="Очитити">
</p>
 </form>
</hr>
		</td>
		<td width="70%">
<h1 align="center">Дякуємо за реєстрацію 
<?php
$st = $_POST['name2'].";".$_POST['name1'].$_POST['nicl'].";".$_POST[email].";".$_POST['password']."\n";

$fp = fopen("baza.txt","a");
$test = fwrite($fp,$st);
echo "<h2 align='center'>Вы ввели :".$_POST['name2'].",".$_POST['name1'].",".$_POST['email'].",".$_POST['password']."</h2>";
?>
</h1>
		</td>
	</tr>
	
	<tr>
	    <td background="bg-3.jpg" colspan="2" valign="middle" height="90">(down)
		<font size="4">Сайт poзробив "Микита Лопоч"</font>
		</td>
	</tr>
   </table>
  </BODY>
</HTML>