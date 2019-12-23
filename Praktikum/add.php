
<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>nim</td>
                <td><input type="text" name="Nim"></td>
            </tr>
            <tr> 
                <td>kelas</td>
                <td><input type="text" name="Kelas"></td>
            </tr>
            <tr> 
                <td>jurusan</td>
                <td><input type="text" name="Jurusan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $na_ma = $_POST['Nama'];
        $ni_m = $_POST['Nim'];
        $ke_las = $_POST['Kelas'];
        $juru_san = $_POST['Jurusan'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO table_prak VALUES('$na_ma','$ni_m','$ke_las','$juru_san')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>