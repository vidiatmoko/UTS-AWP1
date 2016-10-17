<?php
//ROUTING
if(!empty($_GET["page"]))
{

}
else
{
	if(!empty($_POST["daftar"]))
	{
		$nama = $_POST["nama"];
		$kelamin = $_POST["kelamin"];
		$agama = $_POST["agama"];
		$tempattanggallahir = $_POST["tempattanggallahir"];
		$asalsekolah = $_POST["asalsekolah"];
		$nisn = $_POST["nisn"];
		$alamat = $_POST["alamat"];
		$nohp = $_POST["nohp"];
		$namaayah = $_POST["namaayah"];
		$pekerjaanayah = $_POST["pekerjaanayah"];
		$namaibu = $_POST["namaibu"];
		$pekerjaanibu = $_POST["pekerjaanibu"];
		$agamaorangtua = $_POST["agamaorangtua"];
		$alamatorangtua = $_POST["alamatorangtua"];
		$nohporangtua = $_POST["nohporangtua"];
		$nilairapot = $_POST["nilairapot"];
		$nilaiskhun = $_POST["nilaiskhun"];
		
		$input = $database -> daftar($con,$nama,$kelamin,$agama,$tempattanggallahir,$asalsekolah,$nisn,$alamat,$nohp,$namaayah,$pekerjaanayah,$namaibu,$pekerjaanibu,$agamaorangtua,$alamatorangtua,$nohporangtua,$nilairapot,$nilaiskhun);
	}
	include("views/form.php");
}
?>