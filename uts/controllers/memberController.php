<?php
session_start();
require_once '../koneksi.php';
require_once '../models/Member.php';
//1. tangkap request element form
$username = $_POST['username'];
$password = $_POST['password'];
//2. menyimpan data2 diatas ke sebuah array
$data = [
    $username, //? 1
    $password, //? 2
];
//3. prosess
$obj = new Member();
$rs = $obj->cekLogin($data);
if(!empty($rs)){
    //simpan session
    $_SESSION['MEMBER'] = $rs;
    //4. landing page
    header('Location:http://localhost/uts/index.php?hal=dataPegawai');
    }
    else{
    //4. landing page
    header('Location:http://localhost/uts/index.php?hal=gagalLogin');
}
