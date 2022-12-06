<?php 
require 'koneksi.php';

$input = file_get_contents('php://input');
$data = json_decode($input,true);

$pesan = [];
$nama = trim($data['nama']);
$harga = trim($data['harga']);

if ($nama != '') {
	$query = mysqli_query($con,"insert into menu(no,nama,harga) values('','$nama','$harga')");

}else{
	$query = mysqli_query($con,"delete from menu where no='$no'");
}


// if ($query) {
// 	http_response_code(201);
// 	$pesan['status'] = 'sukses';
// }else{
// 	http_response_code(422);
// 	$pesan['status'] = 'gagal';
// }

echo json_encode($pesan);
echo mysqli_error($con);

?>