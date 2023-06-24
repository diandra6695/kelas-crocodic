<?php
// membuat cookie pertama kali
setcookie('username', 'Ganteng Banget Coy', time()+3600, '/');
// cookie username akan di rubah valuenya
setcookie('username', 'Dimas Febri', time()+3600, '/');
// menghapus cookie
setcookie('username', '', time()-3600, '/');


echo "cookie username sudah di buat";
echo "<br>";
echo "valuenya Adalah : ";

echo $_COOKIE['username'];


?>