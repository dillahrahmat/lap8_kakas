<?php
$success = false;
$nim = $_POST['nim'];
$nama = $_POST['nama'];

$row = [];
$column = [];

if (isset($_POST['des'])) {
    sort($nim);
}

for ($i=0; $i < count($nim) ;$i++) {
    $row['nim'] = $nim[$i];
    $row['nama'] = $nama[$i];
    $column[] = $row;
}

if (isset($_POST['kode'])) {
    $json = [
        'response' => [
            'success' => true,
            'data' => $column,
        ]];
} else {
    $json = [
        'response' => [
            'success' => $success,
            'data' =>[],
            'msg'=>'60900117023'  
        ]];
}

header('Content-Type: application/json');
echo json_encode($json);
?>