<?php 

$koneksi = mysqli_connect("localhost","NurFadilahRahmat","60900117004","tp_web_dillah");

// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$sql = "SELECT * FROM table_mhs ORDER BY nama ASC"; 
if ($res = mysqli_query($koneksi, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>nama</th>"; 
        echo "<th>nim</th>";  
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['nama']."</td>"; 
            echo "<td>".$row['nim']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
        // mysqli_free_res($res); 
    } 
    else { 
        echo "Tidak ada DATA."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($koneksi);

?>