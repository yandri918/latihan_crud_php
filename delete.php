<?php

include('connection.php');//mengkoneksikan database

$id = $_GET('id'); //mengambil id yang di parsing dari halaman list.php

$delete = mysqli_query($connect, "DELETE FORM karyawan WHERE id='$id'"); //megnghapus data spesifik

if($delete)
	header('Location : list.php'); 
else
	echo 'Delete data gagal';