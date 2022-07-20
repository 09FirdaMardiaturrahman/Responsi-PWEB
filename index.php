<!DOCTYPE html>
<html>
<head>
	<title>TUGAS AKHIR PWEB</title>
<style>
	*{
		box-sizing: border-box;
	}
	body{
		font-family: times new roman;
		padding: 10px;
		background : #ffffff;
	}

	.header{
		padding: 30px;
		text-align: center;
		background: white;
	}

	.header h1{
		font-size: 50px;
	}

	.topnav{
		overflow: hidden;
		background-color: #333; 
	}

	.topnav a{
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.topnav a:hover{
		background-color: #ddd;
		color: black;
	}

	.leftcolumn{
		float: left;
		width: 25%;
		background-color: #f1f1f1;
		padding-left: 20px
		font-size : 12%;
		text-align: justify;
	}

	.centercolumn{
		float: left;
		width: 40%;
		background-color: #f1f1f1;
		padding-left: 10px
	}

	.rightcolumn{
		float: left;
		width: 30%;
		background-color: #f1f1f1;
		padding-left: 20px
	}

	.fakeimg{
		background-color: #aaa;
		width: 75%;
	}

	.card{
		background-color: white;
		padding: 20px;
		margin-top: 20px;
	}

	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	.footer{
		padding: 20px;
		text-align: center;
		background-color: #ddd;
		margin-top: 20px;
	}

	.leftcolumn, .rightcolumn{
		width: 100%
		padding0;
	}

	.topnav a{
		float: none;
	    width: 100%
	}

</style>
</head>
<body>
	<div class="header" style="background-color: skyblue;">
		<h1 style="font-family: serif; color: white;">TUGAS AKHIR PEMOGRAMAN WEB</h1>
		<marquee>
			<p style="font-size: 18px; color: white;">สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ สวัสดีครับ</p>
		</marquee>
	</div>

	<div class="rightcolumn" style="background-color: white" >
			<div class="card" style="background-color: skyblue;">
		<link rel="stylesheet" type="text/css" href="modif.css">
	<script type="text/javascript" src="script.js"></script>
			<h1><center>KALKULATOR</center></h1>
				<div class="calculator" align="center">
			<form name="form">
				<input type="text" class="textView" name="textView">
			</form>
			<table>
				<tr>
					<td><input type="button" class="button" value="C" onclick="c()"></td>
					<td><input type="button" class="button del" value="DEL" onclick="del()"></td>
					<td><input type="button" class="button" value="*" onclick="insert('*')"></td>
					<td><input type="button" class="button" value=":" onclick="insert('/')"></td>
				</tr>
				<tr>
					<td><input type="button" class="button" value="7" onclick="insert(7)"></td>
					<td><input type="button" class="button" value="8" onclick="insert(8)"></td>
					<td><input type="button" class="button" value="9" onclick="insert(9)"></td>
					<td><input type="button" class="button" value="-" onclick="insert('-')"></td>
				</tr>
				<tr>
					<td><input type="button" class="button" value="4" onclick="insert(4)"></td>
					<td><input type="button" class="button" value="5" onclick="insert(5)"></td>
					<td><input type="button" class="button" value="6" onclick="insert(6)"></td>
					<td><input type="button" class="button" value="+" onclick="insert('+')"></td>
				</tr>
				<tr>
					<td><input type="button" class="button" value="1" onclick="insert(1)"></td>
					<td><input type="button" class="button" value="2" onclick="insert(2)"></td>
					<td><input type="button" class="button" value="3" onclick="insert(3)"></td>
					<td rowspan="2"><input type="button" class="button equal" value="=" onclick="equal()"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="button" class="button zero" value="0"></td>
					<td><input type="button" class="button" value="."></td>
				</tr>
			</table>
		</div><br>		


				<h1><center>KALENDER</center></h1>
			<div align="center">
				<?php
	        //mengambil tanggal sistem saat ini (1-31)
	        $hari = date("d");
	        $hariini=$hari;
	        //mengambil bulan sistem saat ini (1-12)
	        $bulan = date("m");
	        //mengambil tahun sistem saat ini
	        $tahun = date("Y");
	        //mencari jumlah hari bulan dan tahun ini
	        $jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
	        ?>

            <?php
	        switch ($bulan) {
            case 1: $nmbulan = "Januari"; break;
		    case 2: $nmbulan = "Februari"; break;
		    case 3: $nmbulan = "Maret"; break;
		    case 4: $nmbulan = "April"; break;
		    case 5: $nmbulan = "Mei"; break;
		    case 6: $nmbulan = "Juni"; break;
		    case 7: $nmbulan = "Juli"; break;
		    case 8: $nmbulan = "Agustus"; break;
		    case 9: $nmbulan = "September"; break;
		    case 10: $nmbulan = "Oktober"; break;
		    case 11: $nmbulan = "November"; break;
		    case 12: $nmbulan = "Desember"; break;
	        }
	        echo "<center><h1>$nmbulan $tahun</h1></center>";
	        ?>	    
	        <br>
	<table style="border: 2px solid #000000" align="center" cellpadding="25">
		<tr bgcolor="#FF0000">
			<td align="center"><font color="#FFFFFF">Min</font></td>
			<td align="center">Sen</td>
			<td align="center">Sel</td>
			<td align="center">Rab</td>
			<td align="center">Kam</td>
			<td align="center">Jum</td>
			<td align="center">Sab</td>
		</tr>

        <?php
	    $s=date("w",mktime (0,0,0,$bulan,1,$tahun));
	    for ($ds=1; $ds<=$s; $ds++) { 
		echo "<td></td>";
	}

	for ($d=1; $d<=$jumlahhari; $d++) {
		//jika minggu ke 0, maka buat baris baru
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==0) {
			echo "<tr>";
		}

		$warna="#000000"; //warna default
		$warnasel="white"; //warna sel default

		//jika hari minggu beri warna merah
		if (date("l",mktime (0,0,0,$bulan,$d,$tahun))=="Sunday") {
			$warna="#FF0000";
		}

		//blok sel yang sesuai hari ini
		if ($hariini==$d) {
			$warna="black";
			$warnasel="lightgrey";
		}

		//beri warna default tanggal tiap harinya (selain hari minggu)
		echo "<td align=center valign=middle bgcolor=$warnasel> <span style=\"color:$warna\">$d</span></td>";

		//jika hari ke enam, akhiri baris
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==6) {
			echo "</tr>";
		}
	} 
	echo '</table>';
    ?>
				
			</div>
			
    <br><br>
    <div></div>
  
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
			</div>
		</div>

	<div class="row" style="background-color: white" align="center">
		<div class="centercolumn" style="background-color: white">
			<div class="card">

				<h2 align="center" style="font-family: times new roman">TUGAS AKHIR PEMROGRAMAN WEB</h2><br><br>
				<div>
					<center><img src="uad.jpg" width="350px" height="325px"></center>
				</div>
				<br><br>

					<div align="center"><h2>Isi Data Diri Anda</h2></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="58%" border="0" align="center">
				    <tr>
					    <td>Nama lengkap</td>
					    <td><input type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td>NIM</td>
					    <td><input type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td>E-mail</td>
					    <td><input type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td>Prodi</td>
					<td><select name="prodi" id="jurusan">
						<option>Informatika</option>
						<option>Kedokteran</option>
						<option>Farmasi</option>
						<option>Teknik Industri</option>
						<option>Teknik Kimia</option>
					</select></td>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input type="submit" name="submit" value="Kirim" id="kirim"><input type="reset" name="reset" value="Batal"></td>
				</tr>
				
			</table>
		</form>
		<br><br>
		<div align="center"><a href="tampilan.php"><b>::Lihat Data Diri::<b></a></div>
			</div>
		</div>

		<div class="leftcolumn" style="background-color: white;">
			<div class="card" style="background-color: skyblue;">
				<h3 style="font-family: Times New roman">Aga Kareba guysss....<br> 
					<br>Perkenalkan saya Firda Mardiaturrahman Program Studi Informatika</h3><br>
				<p>Saya Kuliah Di Universitas Ahmad Dahlan Fakultas Teknologi Industri</p>
				<div><br><br>
					<center><img src="taya.jpg" width="270px"></center>
				</div><br>
				<div class="card" style="background-color: slateblue;">
		    		<h3>Follow Me</h3>
		    		<img src="ig.png" width="50px">
		    		<a href="https://www.instagram.com/sipirdaa__/">Sipirda</a><br><br>
		    		<img src="fb.png" width="45px">
		    		<a href="https://m.facebook.com/firda.mrdiaturrhmn">Sipirda</a><br><br>
		    		<p>Copyright ©️ Sipirda 2022</p>
	       		</div>
			</div>
		</div>
</body>
</html>