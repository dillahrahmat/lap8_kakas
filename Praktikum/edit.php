<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{  
    $na_ma=$_POST['Nama'];
    $ni_m=$_POST['Nim'];
    $ke_las=$_POST['Kelas'];
    $juru_san=$_POST['Jurusan'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE table_prak SET nama='$na_ma',kelas='$ke_las',jurusan=$juru_san WHERE nim=$ni_m");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$ni_m = $_GET['Nim'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM table_prak WHERE nim=$ni_m");

while($user_data = mysqli_fetch_array($result))
{
    $na_ma = $user_data['nama'];
    $ni_m = $user_data['nim'];
    $ke_las = $user_data['kelas'];
    $juru_san = $user_data['jurusan'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $na_ma;?>></td>
            </tr>
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="Nim" value=<?php echo $ni_m;?>></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="Kelas" value=<?php echo $ke_las;?>></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan" value=<?php echo $juru_san;?>></td>
            </tr>
            
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['Nim'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>