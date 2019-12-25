<!DOCTYPE html>
<html>
	<head>
		<style>
			.text-center{
				text-align: center;
			}
			.d1 {border: 2px solid ; border-radius: 20px;}
			table {text-align : left;}
			.d1.night{
				background: #00151f
			}
			table.night{
				color: #fff;
			}
			h1.night{
				color:#fff;
			}
			.toggle {
				position: absolute;
		    	top: 40px;
		    	right: 50px;
		    	background: #fff;
		    	border: 2px solid #00151f;
		    	width: 45px;
		    	height: 20px;
			    cursor: pointer;
			    border-radius: 20px;
			    transition: 0.5s;
				}
				.toggle.active{
					background: #00151f;
					border: 2px solid #fff;
				}
				.toggle.active:before{
					left: 27px;
					background: #fff;
				}
				.toggle:before
				{
				    content: '';
				    position: absolute;
				    top: 2px;
				    left: 2px;
				    width: 16px;
				    height: 16px;
				    background: #00151f;
				    border-radius: 50%;
				    transition: 0.5s;
				}
		</style>
	</head>
	<body align = center>
		<?php
$servername = "localhost";
$username = "bilal";
$password = "bilalgaje180799";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript">
	   		 $(document).ready(function(){
	        	$('.toggle').click(function(){
					$('.toggle').toggleClass('active')
					$('.d1').toggleClass('night')
					$('table').toggleClass('night')
			         $('h1').toggleClass('night')
		        })
		    })
		</script>
		<div class="toggle">
		</div>
		<div class ="d1">
			<div class="text-center">
				<h1>Curiculum Vitae</h1>
				<p> <img src = "binomo.png" style="width:250px;height:250px;"> </p>				
			</div>
			<table align="center">
				<tr>
					<th>Nama</th>
					<td>Bilal Abdurrahman</td>
				</tr>
				<tr>
					<th>Usia</th>
					<td>20</td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td>Laki-laki</td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>Jln. Kota Baru, Bekasi</td>
				</tr>
				<tr>
					<th>Telepon</th>
					<td>087778713672</td>
				</tr>
				<tr>
					<th>Agama</th>
					<td>Islam</td>
				</tr>
				<tr>
					<th>Tempat/Tgl Lahir</th>
					<td>Jakarta/18-07-1999</td>
				</tr>
				<tr>
					<th>Status</th>
					<td>Belum Menikah</td>
				</tr>
				<tr>
					<th>Kewarganegaraan</th>
					<td>Indonesia</td>
				</tr>
				<tr>
					<th rowspan="3">Pendidikan</th>
					<td><a href = "https://alishmah.sch.id">SDIT Al-Ishmah</a></td>
				</tr>
				<tr>
					<td><a href ="https://www.mtsn30-jakarta.sch.id">MTsN 30 Jakarta Timur</a></td>
				</tr>
				<tr>
					<td><a href ="https://www.sman67-jkt.sch.id">SMAN 67 JAKARTA</a></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><a href="mailto:babdurrahman68@gmail.com">babdurrahman68@gmail.com</a></td>
				</tr>

			</table>
		</div>	
	</body>
</html>
