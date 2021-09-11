<?php

// Memanggil fungsi dari CSRF
include('csrf.php');

//include class controller
include "controller/controller_pegawai.php";

//variabel main merupakan objek baru yang dibuat dari class controller
$main = new controller();

//kondisi awal (menampilkan seluruh data)
if (isset($_GET['i'])) {
	// Validasi Token CSRF
    if(validation()==true)
    {
		$main->view_post(); //kondisi untuk mengakses halaman add
	}
} else if (isset($_GET['e'])) {
	// Validasi Token CSRF
    if(validation()==true)
    {
		$main->view_put($_GET['e']); //kondisi untuk mengakses halaman add
	}
} else {
	$main->view_index(); //kondisi awal (menampilkan seluruh data)
}
