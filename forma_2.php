<HTML>
<HEAD>
	<meta charset="utf-8">
	<title> Сайт </title>
	
	<script type="text/javascript">
	function clockPainting() {
        var now = new Date();
        var sec = now.getSeconds();
        var min = now.getMinutes();
        var hr = now.getHours();

        var ctx = document.getElementById("canvas").getContext("2d");
        ctx.save();// помещаем текущий контекст в стэк

        ctx.clearRect(0,0,150,150);
        ctx.translate(75, 75);
        ctx.scale(0.4,0.4);
        ctx.rotate(-Math.PI/2);

        ctx.strokeStyle = "black";
        ctx.fillStyle = "black";
        ctx.lineWidth = 8;
        ctx.lineCap = "round";

        ctx.save();
        ctx.beginPath();

        for (var i = 0; i < 12; i++) {
            ctx.rotate(Math.PI/6);
            ctx.moveTo(100,0);
            ctx.lineTo(120,0);
        }

        ctx.stroke();// нарисовали то, что ранее описали
        ctx.restore();// достаем последний сохраненный контекст из стэка

        ctx.save();
        // рисуем часовую стрелку, вращая холст
        ctx.rotate((Math.PI/6)*hr +
            (Math.PI/360)*min +
            (Math.PI/21600)*sec);
        ctx.lineWidth = 14;

        ctx.beginPath();
        ctx.moveTo(-20,0);

        // линия почти до часовых меток
        ctx.lineTo(80,0);
        ctx.stroke();
        ctx.restore();

        ctx.save();

        // минутная стрелка
        ctx.rotate((Math.PI/30*min) +
            (Math.PI/1800)*sec);
        ctx.lineWidth = 10;

        ctx.beginPath();
        ctx.moveTo(-28,0);
        ctx.lineTo(112,0);
        ctx.stroke();
        ctx.restore();

        ctx.save();

        // секундная стрелка
        ctx.rotate(sec * Math.PI/30);
        ctx.strokeStyle = "#D40000";// цвет контура
        ctx.fillStyle = "#D40000";
        ctx.lineWidth = 6;

        ctx.beginPath();
        ctx.moveTo(-30,0);
        ctx.lineTo(83,0);
        ctx.stroke();
        ctx.restore();

        ctx.restore();
    }
	</script>
	
	<script type="text/javascript">
	function send()
	{    var valid = true;
	     var elems = document.forms[0].elements;
		 for(var i=0;i < document.forms[0].length;i++)
	 {
		 if(elems[i].getAttribute('type') == 'text' ||
		    elems[i].getAttribute('type') == 'password' ||
			elems[i].getAttribute('type') == 'email' ) 
		 {
		     if(elems[i].value == '')
		     {
		         elems[i].style.border = '2px solid red';
		         valid = false;
		     }
		 
		 }
		 if(!valid)
		 {
		     alert('Запомніть всі поля !!!');
			 return false;
		 }
	 }
	
	}
	</script>
	
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
 <hr>
    <td width="70%" background="bg.jpg"  valign='top'><font size="5">

<h1 align="center">Список зареєстрованих </h1>
<TABLE align="center" border="1" width="600">
               <tr>
<td align="center"><b>Прізвище</b></td>
<td align="center"><b>Імя</b></td>
<td align="center"><b>E-mail</b></td>
<td align="center"><b>Пароль</b></td>
           </tr>
<?php
$data = file("baza.txt");
foreach ($data as $line){
    $trs = explode(";", $line);	
	echo '<tr>';
    echo '<td>'.$trs[0].'</td>';
	echo '<td>'.$trs[1].'</td>';
	 echo '<td>'.$trs[2].'</td>';
	 echo '<td>'.$trs[3].'</td>';
	         echo '</tr>';
	}
?>
</table'>;
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