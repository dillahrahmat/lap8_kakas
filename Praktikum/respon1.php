<?php

if (isset($_POST["submit"])) {
    $input['nama'] = $_POST["nama"];
    $input['nim'] = $_POST["nim"];
    $input['Jurusan'] = $_POST["jurusan"];
    
    echo $input['nama']."<br>";
    echo $input['nim']."<br>";
    echo $input['jurusan']."<br>";
}  
?>
