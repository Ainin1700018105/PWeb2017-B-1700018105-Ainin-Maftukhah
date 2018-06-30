<html>
<head>
<title>FORM PENDAFTARAN</title>
</head>
<body background="pp.jpg">
<h2><i>SILAHKAN ISI FORMULIR TERLEBIH DAHULU</i></h2>
<form action=lihat.php method=POST>
<table border=0 >
<tr><td><b>NIS</b></td><td align=center>:</td><td><input type=text name="nis"></td></tr>
<tr><td><b>NISN</b></td><td align=center>:</td><td><input type=text name="nisn"></td></tr>
<tr><td><b>Nama Panggilan</b></td><td align=center>:</td><td><input type=text name="namap"></td></tr>
<tr><td><b>Nama Lengkap</b></td><td align=center>:</td><td><input type=text name="namal"></td></tr>
<tr><td><b>Tempat Lahir</b></td><td align=center>:</td><td><input type=text name="tempatl"></td></tr>
<tr><td><b>Tanggal Lahir</b><td align=center>:</td><td>
<select name="tgl">
<option selected="selected">Tanggal</option>
<?php
for($a=1; $a<=31; $a+=1){
echo"<option value=$a> $a </option>";
}
?>
</select>
<select name="bln">jjuj
<option selected="selected">Bulan</option>
<?php
$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$jlh_bln=count($bulan);
for($c=0; $c<$jlh_bln; $c+=1){
echo"<option value=$bulan[$c]> $bulan[$c] </option>";
}
?>
</select>
<select name="thn">
<option selected="selected">Tahun</option>
<?php
for($a=2000; $a>=0001; $a-=1){
echo"<option value=$a> $a </option>";
}
?>
</select>
</td></tr>
<tr><td><b>Jenis Kelamin</b><td align=center>:</td></td><td><input type=radio name=jk value=Laki-laki>Laki-Laki<input type=radio name=jk value=perempuan>Perempuan</td></tr>
<tr><td><b>Anak Ke</b></td><td align=center>:</td><td><input type=text name="anak"></td></tr>
<tr><td><b>Dari Berapa Saudara</b></td><td align=center>:</td><td><input type=text name="darib"></td></tr>
<tr><td><b>Asal Sekolah </b><td align=center>:</td></td><td><input type=radio name=as value=MTS>MTS<input type=radio name=as value=SMP>SMP<input type=radio name=as value=SMA>SMA<input type=radio name=as value=MA>MA<input type=radio name=as value=SMK>SMK</td></tr>
<tr><td></td><td></td><td><input type=teks name=as2></td></tr>
<tr><td><b>Nama Ayah</b></td><td align=center>:</td><td><input type=text name="namaa"></td></tr>
<tr><td><b>Nama Ibu</b></td><td align=center>:</td><td><input type=text name="namai"></td></tr>
<tr><td><b>Penghasilan Orang Tua</b></td><td align=center>:</td><td><input type=text name="penghasilan"></td></tr>
<tr><td><b>Alamat Lengkap</b><td align=center>:</td></td><td><input type=teks name=alamat></td></tr>
<tr><td><b>RT</b></td><td align=center>:</td><td><input type=text name="rt"></td></tr>
<tr><td><b>RW</b></td><td align=center>:</td><td><input type=text name="rw"></td></tr>
<tr><td><b>Kecamatan</b></td><td align=center>:</td><td><input type=text name="kec"></td></tr>
<tr><td><b>Kabupaten</b></td><td align=center>:</td><td><input type=text name="kab"></td></tr>
<tr><td><b>Provinsi</b></td><td align=center>:</td><td><input type=text name="prov"></td></tr>
<tr><td><b>Kode POS</b></td><td align=center>:</td><td><input type=text name="kode"></td></tr>
<tr><td><b>No Hp</b></td><td align=center>:</td><td><input type=text name="no"></td></tr>

<tr><td colspan=3>
<script type="text/javascript">
function enableButton() {    if(document.getElementById('option').checked){
document.getElementById('edit').disabled='';
} else {
document.getElementById('edit').disabled='true';
}
}
</script>
</head>
<body onload="enableButton();">
<form method="post" action=lihat.php>
<input type="checkbox" name="option" id="option" onClick="javascript:enableButton();">Dengan ini menyatakan bahwa yang diberikan sesuai data sebenarnya<br>
</td></tr>
<tr><td colspan=3 align=right><input type="submit" name="button" value="Daftar" id="edit"><input type="reset" value="Cancel"></td></tr>
</form>
</td></tr>
</table>
</form>
</body>
</html>