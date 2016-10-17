<?php

class database {

	function daftar($con,$nama,$kelamin,$agama,$tempattanggallahir,$asalsekolah,$nisn,$alamat,$nohp,$namaayah,$pekerjaanayah,$namaibu,$pekerjaanibu,$agamaorangtua,$alamatorangtua,$nohporangtua,$nilairapot,$nilaiskhun)
	{
		//query
		$q1 = mysqli_query($con,"INSERT INTO tbl_pendaftaran VALUES(null,'$nama','$kelamin','$agama','$tempattanggallahir','$asalsekolah','$nisn','$alamat','$nohp','$namaayah','$pekerjaanayah','$namaibu','$pekerjaanibu','$agamaorangtua','$alamatorangtua','$nohporangtua');");
		$q2 = mysqli_query($con,"INSERT INTO tbl_nilai VALUES(null,'$nilairapot','$nilaiskhun');");
		
		if($q1 && $q2)
		{
			echo '
			<script>alert("DATA BERHASIL DIMASUKKAN");window.location.href="";</script>
			';
		}
	}

}

?>