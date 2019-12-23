<?php

if (isset($_POST['kode'])) {
  for ($i = 0; $i < count($_POST['nim']); $i++) {
    $data[$i] = ['data' => ['nim' => $_POST['nim'], 'name' => $_POST['name']]];
  }
} else {
  $data = ['response' => ['succes' => false, 'data' => [], 'msg' => 'Masukkan Nim Anda: ']];
}

// if (isset($_POST['kode'])) {
//   for ($i = 0; $i < count($_POST['nim']); $i++) {
//     $data[$i] = ['data' => ['nim' => $_POST['nim'], 'name' => $_POST['name']]];
//   }
// } else {
//   $data = ['response' => ['succes' => false, 'data' => [], 'msg' => 'Masukkan Nim Anda:']];
// }

//echo var_dump($data['data']['nim'][0]);
echo json_encode($data);
