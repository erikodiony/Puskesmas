<?php
session_start();
		
if ($_SESSION['level'] == "Admin")
		{
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Admin`, Tidak diperbolehkan melihat Menu `Resepsionis` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />'; 
		} 	

	else if ($_SESSION['level'] == "Apoteker")
		{
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Apoteker`, Tidak diperbolehkan melihat Menu `Resepsionis` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Apoteker" />'; 
		}  

	else if ($_SESSION['level'] == "Assist. Dokter")
		{
	echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Assist. Dokter`, Tidak diperbolehkan melihat Menu `Resepsionis` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Assist.Dokter" />'; 
		}  

	else if ($_SESSION['level'] == "Manajer")
		{
	echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Manajer`, Tidak diperbolehkan melihat Menu `Resepsionis` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Manajer" />'; 
		}  

	else if ($_SESSION['level'] == "Pasien")
		{
	echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Pasien`, Tidak diperbolehkan melihat Menu `Resepsionis` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../../Pasien" />'; 
		}  
?>