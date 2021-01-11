<?php 
session_start();
if (isset($_SESSION['isim1'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zar Oyunu</title>
	<style type="text/css">
		.ana{
            	width: 1200px;
            	padding: 5%;
            }
            .sol{
            	width: 200px; height:400px; float: left;
            }
            .orta{
            	width: 800px; height:400px; float: left;
            }
            .sag{
            	width: 200px; height:400px; float: right;
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
		#sol
            {
                float:left;
                width:50%;
                height:100%;
                background:red;
            }

            #sag
            {
                float:left;
                width:50%;
                height:100%;
                background:blue;
            }
            body{
            	background-color:lightgray;
            }
            fieldset{
            	background-color:darkgray;
            	width: 50%;
            	border:1px solid;
            	border-radius:8px;

            }
	</style>
</head>
<body>
<div class="ana">
	<?php 
	$zar1=rand(1,6);//RAstgele Sayı Ürettik
	$zar2=rand(1,6);//RAstgele Sayı Ürettik
	$isim1=$_SESSION['isim1'];//İndex sayfasından Session ile gönderilen ismi değişkene atadık
	$isim2=$_SESSION['isim2'];//İndex sayfasından Session ile gönderilen ismi değişkene atadık
	 ?>
	<div class="sol"><!-- Sol Div-->
		<center><span style="background-color:darkgreen; color:white; border: 2px solid green;">Yeşil Taraf </span> <br><br><!-- Başlığa Renk Verdik -->
		<fieldset style="height: 100px; background-color: darkgreen; color:white;"><br>
			İsim : <?php echo $isim1; ?><br><br><!-- İsim içine index den gönderilen ismi yazdırdık -->
			Attığı Zar : <?php 
			if (isset($_POST['zar'])) {
				echo $zar1;
			}else {
				echo "😎";
			} 

			 ?><!-- Üretilen rastgele zar 1 değerini yazdırdık -->
		</fieldset></center>
	</div>


	<div class="orta" align="center"><!-- Orta Div-->
		<fieldset>
		<form action="" method="post">
			<input class="btn" type="submit" value="Zar At" name="zar">&nbsp;&nbsp;<!-- Zar At Butonu Oluşturduk-->
			<input class="btn" style="background-color: darkred;" type="submit" value="Çıkış" name="cıkıs"><!-- Çıkış Butonu oluşturduk -->
		 	<?php //Bu yapılan işkem : çıkış butonuna tıklandığında session değerlerini öldürdü ( Sildi ) ve index sayfasına geri yönlendirdi
		 	if (isset($_POST['cıkıs'])) { 
		 		session_destroy();
		 		header("Location:index.php");
		 	}
		 	 ?>
			<br><br>
			
<?php 

			/*
			Burada Önce Zar Resimlerini Gelen Rastgele Değere Göre Ekrana Çıktı Verdirdik.
			Sonra Koşulumuzu Oluşturduk
			*/
			if (isset($_POST['zar'])) {
				
				echo "<img src='img/$zar1.png' height='150' width='150'>"."&nbsp;";
				echo "<img src='img/$zar2.png' height='150' width='150'><br><br>";
				if ($zar1>$zar2) { 
					echo "<font color='darkgreen'>"."TEBRİKLER ".$isim1." Siz Kazandınız.. "."</font>";
				}elseif ($zar2>$zar1) {
					echo "<font color='darkred'>"."TEBRİKLER ".$isim2." Siz Kazandınız.. "."</font>";
				}
				else{
					echo "<font color='black'>"."Üzgünüm Beraber Kaldınız "."</font>";
				}
			}

		
			 ?>
		</form>
		</fieldset>
		<?php 

		echo "<br>";
		

		 ?>
	</div>


	<div class="sag"><!-- Sağ Div-->

	<center><span style="background-color:darkred; color:white; border: 2px solid red;">Kırmızı Taraf </span> <br><br> <!-- Başlığa Renk Verdik -->
		<fieldset style="height: 100px; background-color: darkred; color:white;""> <br>
			İsim :  <?php echo $isim2; ?><br><br><!-- İsim içine index den gönderilen ismi yazdırdık -->
			Attığı Zar : <?php 
			if (!isset($_POST['zar'])) {
				echo "😎";
			}else {
				echo $zar2;
			}


			 ?><!-- Üretilen rastgele zar 1 değerini yazdırdık -->
		</fieldset></center>	
	 </div>

</div>
</body>
<?php 
}else {
	session_destroy();
	header("Location:index.php");
}
 ?>
</html>