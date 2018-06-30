<!DOCTYPE html>
<html>
<head>
<title>LOGIN KE PENDAFTARAN</title>
<link rel="stylesheet" type="text/css" href="Halaman_Utama.html">
</head>
<style type="text/css">
		body{
	background-image : url("pp.jpg");
}
</style>
<body>
	<td><h1>PENDAFTARAN PESANTREN ONLINE BERBASIS WEBSITE</h1></td>
	<td><h2>TUGAS AKHIR PEMROGRAMAN WEB</h2></td>
	<td><h3>Ainin Maftukhah - 1700018105</h3></td>

	<div class="login"><br>
		<form action="Halaman_Utama.html" method="post" onsubmit="returnvalidasi()">
			<div>
				<label>Username :</label>
				<input type="username" name="username"/>
			</div>
			<div>
				<label>Password :</label>
				<input type="password" name="password"/>
			</div>
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
	<br>
	<p>Ket : Username dan Password Inputin Terserah</p>
</body>
<script type="text/javascript">
	function validasi(){
		var Username = document.getElemenByld("username").value;
		var Password = document.getElemenByld("password").value;
		if (username != "&& password !=") {
			return true;
		}else{
			alert('Username dan Password Harus di isi !');
			return false;
		}
	}
</script>
</html>