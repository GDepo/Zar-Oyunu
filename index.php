<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zar Oyunu</title>
	<style type="text/css">
		#ana_div {
    
    height: 350px;
    width: 960px;
    margin-right: auto;
    margin-left: auto;
    background-color: darkgray;
    
}

.div {
    
    float: left;
    display: inline-block;
    height: 200px;
    width: 450px;
    margin: 10px;
    color: #FFF;

}
.btn{
			height: 40px;
			width: 80px;
			background-color:mediumseagreen;
			border:0px solid;
			border-radius:6px;
		}
		.btn:hover{
			background-color:red;
			opacity: 0.6;
		}
		form{
			margin-top: 60px;
		}
		input{
			border:2px solid;
			border-radius:4px;
			box-shadow: 3px 3px 3px #000;
		}
		.gdyazilim {
			text-decoration:none;
			color:black;
			font-weight:bold; 
			font-family:tahoma;
		}
		.gdyazilim:hover{
			color:red;
			font-family:jokerman;
		}

	</style>
</head>
<body bgcolor="lightgray"><br><br><br>
	<center><h1 style="font-family:tahoma;">ZAR OYUNUNA HOŞGELDİNİZ</h1></center>
<div id="ana_div">
    
    <div align="center" class="div" id="div"><br>
    	
  <form method="post">
    	<font color="black" face="tahoma">1. İSİM :</font>	<input type="text" name="isim1" required><br><br><br>
    	<font color="black" face="tahoma">2. İSİM :</font>	<input type="text" name="isim2" required><br><br><br><br>
    				<input class="btn" type="submit" value="BAŞLA" name="gonder">
    		
 </form>

    </div>


    <div class="div" id="div2">
    	<code>
    		<center><h1><u><font color="red">KURALLAR</font></u></h1><br></center>
    		<ol style="color:black; font-weight:bold;">
    		<li> İlk önce oyuna başlamadan önce isimlerinizi yazınız.<br></li> 
    		<li> İlk isim solda ki zarı - ikinci isim ise sağda ki zarı temsil etmektedir.<br></li>
    		<li> Başla butonuna bastıktan sonra oyun sayfasına yönlendirileceksiniz ve zar at butonuna basarak oyuna başlayacaksınız.<br></li>
    		<li> En büyük sayı atan kazanır.<br></li>
    		<li> Gelecek olan zar sayıları tamamen rastgeledir. Bol Şanslar İyi Oyunlar....<br></li>
			</ol>

    	</code>
    </div><br><br><br>
    
    <?php 
	session_start();
	if (isset($_POST['gonder'])) {
		$isim1=$_POST['isim1'];
		$isim2=$_POST['isim2'];
		$_SESSION['isim1']=$isim1;
		$_SESSION['isim2']=$isim2;
		header("Location:zar-oyunu.php");
	}



     ?>

</div>


<center><h3><a href="https://gdyazılım.com/" target="_blank" class="gdyazilim" title="Gitmek için Tıkla!">GD Yazılım Sunar</a></h3></center>

</body>
</html>