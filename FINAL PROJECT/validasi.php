<?php
$email = $_POST["email"];
$nama = $_POST["nama"];
$phone_number = $_POST["phone_number"];
$selected_option = $_POST["dropdown"];
$pesan ="";

if(empty($email)){
    $pesan .= "Harap isi email";
}else if(!filter_var($email, "@")){
    $pesan .= "Format email tidak sesuai!";
}else{
    $pesan .= "Email valid";
}

if(empty($nama)){
    $pesan .= "Nama harus diisi (min. 3 karakter)";
}

if(empty($phone_number)){
    $pesan .= "Nomor telepon harus diisi" ;
}else if(!preg_match("/^(\ 08|08|0)[0-9]{14}$/", $phone_number)){
    $pesan .= "Format nomor telepon tidak sesuai" ;
}else{
    $pesan .= "Nomor telepon valid" ;
}

if(empty($selected_option)){
    $pesan .= "Pilih event yang akan diikuti";
}else{
    $pesan .= "Selamat mengikuti event" . $selected_option;
}

echo $pesan;
?>