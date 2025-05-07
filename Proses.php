<?php
$Nama = $_POST ['nama'];
$Email = $_POST ['email'];

if(empty($Nama && $Email)){
    echo "Nama dan Email tidak boleh kosong";
}else{
    echo "nama anda: $Nama <br>";
    echo "email anda: $Email <br>";    
}
?>