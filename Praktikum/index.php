<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM table_prak");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>nama</th> <th>nim</th> <th>kelas</th> <th>jurusan</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['kelas']."</td>"; 
        echo "<td>".$user_data['jurusan']."</td>";   
        echo "<td><a href='edit.php?id=$user_data[nim]'>Edit</a> | <a href='delete.php?id=$user_data[nim]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>