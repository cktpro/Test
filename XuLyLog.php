<?php

$user = $_REQUEST['t1'];
$pass = $_REQUEST['t2'];
//b?t l?i form r?ng
$bienketnoi = mysqli_connect('localhost', 'root') or die('Khong the ket noi csdl: ' . mysqli_error());
//Chon csdl de lam viec
$db_selected = mysqli_select_db($bienketnoi, 'giaythethao');
$rs = mysqli_query($bienketnoi, "SELECT * FROM khachhang where TenKH='$user' and MatKhau='$pass'");
if (mysqli_num_rows($rs) == 0) {
    echo'Tài khoản khoặc mật khẩu không chính xác';
} else {
    Echo "Đăng Nhập Thành Công";
    
    
}
?>



