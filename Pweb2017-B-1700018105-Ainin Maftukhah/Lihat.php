<?php
$url = 'C:\xampp\htdocs\Tugas_Akhir\pp.jpg';

echo "<h2><b>HASIL PENULISAN DATA PENDAFTARAN<b></h2><br>";
$nis = $_POST['nis'];
$nisn = $_POST['nisn'];
$namap = $_POST['namap'];
$namal = $_POST['namal'];
$tempatl = $_POST['tempatl'];
$tgl = $_POST['tgl'] ;
$bln = $_POST['bln'] ;
$thn = $_POST['thn'] ;
$jk = $_POST['jk'];
$anak = $_POST['anak'];
$darib = $_POST['darib'];
$as =$_POST['as'];
$as2 = $_POST['as2'];
$namaa = $_POST['namaa'];
$namai = $_POST['namai'];
$penghasilan = $_POST['penghasilan'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$kec = $_POST['kec'];
$kab = $_POST['kab'];
$prov = $_POST['prov'];
$kode = $_POST['kode'];
$no = $_POST['no'];

if(empty($namap)||empty($namal)||empty($tempatl)||empty($thn)||empty($alamat)||empty($as2)){
echo"<script>alert('Maaf, Semua Form Harus diisi'); javascript:history.go(-1);</script>";
exit;
}else{
echo"<table border=0>
<tr><td><b>NIS</b></td><td>:</td><td>$nis</td></tr>
<tr><td><b>NISN</b></td><td>:</td><td>$nisn</td></tr>
<tr><td><b>Nama Panggilan</b></td><td>:</td><td>$namap</td></tr>
<tr><td><b>Nama Lengkap</b></td><td>:</td><td>$namal</td></tr>
<tr><td><b>Tempat Lahir </b></td><td>:</td><td> $tempatl</td></tr>
<tr><td><b>Tanggal Lahir</b></td><td> :</td><td> $tgl $bln $thn </td></tr>
<tr><td><b>Jenis Kelamin</b></td><td> : </td><td>$jk </td></tr>
<tr><td><b>Anak Ke</b></td><td>:</td><td>$anak</td></tr>
<tr><td><b>Dari Berapa Saudara</b></td><td>:</td><td>$darib</td></tr>
<tr><td>Asal Sekolah </td><td>:</td><td>$as $as2 </td></tr>
<tr><td><b>Nama Ayah</b></td><td>:</td><td>$namaa</td></tr>
<tr><td><b>Nama Ibu</b></td><td>:</td><td>$namai</td></tr>
<tr><td><b>Penghasilan Orang Tua</b></td><td>:</td><td>$penghasilan</td></tr>
<tr><td><b>Alamat </b></td><td>:</td><td> $alamat </td></tr>
<tr><td><b>RT</b></td><td>:</td><td>$rt</td></tr>
<tr><td><b>RW</b></td><td>:</td><td>$rw</td></tr>
<tr><td><b>Kecamatan</b></td><td>:</td><td>$kec</td></tr>
<tr><td><b>Kabupaten</b></td><td>:</td><td>$kab</td></tr>
<tr><td><b>Provinsi</b></td><td>:</td><td>$prov</td></tr>
<tr><td><b>Kode POS</b></td><td>:</td><td>$kode</td></tr>
<tr><td><b>No Hp</b></td><td>:</td><td>$no</td></tr></table><br>";

echo"<table border=1 align=center width=95%>
<tr><td>TANGGAL DAFTAR = ";
$t = date('d F y');
echo " $t </td></tr></table>";
}
?>