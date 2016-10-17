<html>
<head>
			<title>form pendaftaran siswa baru</title>
			<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("images/dark-wood.jpg");
				background-position: center;
				font-family: Georgia, Times, serif;
				line-height: 1.4em;
				margin: 0px;}
			.wrapper {
				width: 940px;
				margin: 20px auto 20px auto;
				border: 2px solid #000000;
				background-color: #ffffff;}
			header {
				height: 160px;
				background-image: url(images/header.png);}
			h1 {
				text-indent: -9999px;
				width: 940px;
				height: 130px;
				margin: 0px;}
			nav, footer {
				clear: both;
				color: #ffffff;
				background-color: #aeaca8;
				height: 30px;}
			nav ul {
				margin: 0px;
				padding: 5px 0px 5px 30px;}
			nav li {
				display: inline;
				margin-right: 40px;}
			nav li a {
				color: #ffffff;}
			nav li a:hover, nav li a.current {
				color: #000000;}
			section.courses {
				float: left;
				width: 659px;
				border-right: 1px solid #eeeeee;}
			article {
				clear: both;
				overflow: auto;
				width: 100%;}
			hgroup {
				margin-top: 40px;}
			figure {
				float: left;
				width: 290px;
				height: 220px;
				padding: 5px;
				margin: 20px;
				border: 1px solid #eeeeee;}
			figcaption {
				font-size: 90%;
				text-align: left;}
			aside {
				width: 230px;
				float: left;
				padding: 0px 0px 0px 20px;}
			aside section a {
				display: block;
				padding: 10px;
				border-bottom: 1px solid #eeeeee;}
			aside section a:hover {
				color: #985d6a;
				background-color: #efefef;}
			a {
				color: #de6581;
				text-decoration: none;}
			h1, h2, h3 {
				font-weight: normal;}
			h2 {
				margin: 10px 0px 5px 0px;
				padding: 0px;}
			h3 {
				margin: 0px 0px 10px 0px;
				color: #de6581;}
			aside h2 {
				padding: 30px 0px 10px 0px;
				color: #de6581;}
			footer {
				font-size: 80%;
				padding: 7px 0px 0px 20px;}
		</style>
</head>
	<body bgcolor="rosybrown">
	
<form action="#" method="POST">
<table border='1' width='50%' cellpadding='2'  cellspacing='2' align='center' bgcolor="#C0C0C0">
<center><img src="gambar/logo.PNG"></center>
<h2 align="center">Formulir Pendaftaran Mahasiswa Baru</h2>
<pre>
<td>DATA CALON PESERTA DIDIK :</td>
	<tr><td><b>Nama</b></td><td><input type="text" value="" name="nama" placeholder="Inputkan Nama Siswa Baru" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Jenis Kelamin</b></td><td><input type="radio" name="kelamin" value="pria"/><label for="kelamin">Pria</label>
						<input type="radio" name="kelamin" value="wanita"/><label for="kelamin">Wanita</label>
							</td></tr>
	<tr><td><b>Agama</b></td><td><input type="text" value="" name="agama" placeholder="Inputkan Agama Siswa" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Tempat & Tgl Lahir</b></td><td><input type="text" value="" name="tempattanggallahir" placeholder="Inputkan Tempat & Tgl Lahir" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Asal Sekolah</b></td><td><input type="text" value="" name="asalsekolah" placeholder="Inputkan Asal Sekolah" size="60" maxlength="50"/></td></tr>
	<tr><td><b>NISN</b></td><td><input type="text" value="" name="nisn" placeholder="Inputkan NISN" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Alamat</b></td><td><input type="text" value="" name="alamat" placeholder="Inputkan Alamat" size="60" maxlength="50"/></td></tr>
	<tr><td><b>HP/Telp</b></td><td><input type="text" value="" name="nohp" placeholder="Inputkan HP/Telp" size="60" maxlength="50"/></td></tr>
</pre>
<pre>
<td>DATA ORANG TUA CALON PESERTA DIDIK :</td>
	<tr><td><b>Nama Ayah</b></td><td><input type="text" value="" name="namaayah" placeholder="Inputkan Nama Ayah" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Pekerjaan Ayah</b></td><td><input type="text" value="" name="pekerjaanayah" placeholder="Inputkan Pekerjaan Ayah" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Nama Ibu</b></td><td><input type="text" value="" name="namaibu" placeholder="Inputkan Nama Ibu" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Pekerjaan Ibu</b></td><td><input type="text" value="" name="pekerjaanibu" placeholder="Inputkan Pekerjaan Ibu" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Agama Orang Tua</b></td><td><input type="text" value="" name="agamaorangtua" placeholder="Inputkan Agama Orang Tua" size="60" maxlength="50"/></td></tr>
	<tr><td><b>Alamat Orang Tua</b></td><td><input type="text" value="" name="alamatorangtua" placeholder="Inputkan Alamat Orang Tua" size="60" maxlength="50"/></td></tr>
	<tr><td><b>HP/Telp</b></td><td><input type="text" value="" name="nohporangtua" placeholder="Inputkan Nomor Orang Tua" size="60" maxlength="50"/></td></tr>
</pre>
<pre>
	<td>NILAI :</td>
	<tr><td><b>Nilai Rapot</b></td><td><input type="text" value="" name="nilairapot" placeholder="Inputkan Nilai Rapot" size="60" maxlength="50"/></td></tr>
	<tr><td><b>HP/Telp</b></td><td><input type="text" value="" name="nilaiskhun" placeholder="Inputkan Nilai SKHUN" size="60" maxlength="50"/></td></tr>
	<td><center><input type="submit" name="daftar" value="DAFTAR"></center></td>
</pre>
</table>
</form>
	</body>
</html>