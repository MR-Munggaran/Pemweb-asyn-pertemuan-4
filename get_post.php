<?php
// GET
// if (isset($_GET['submit'])) {
//     echo $_GET['nama'];
// }
if (isset($_POST['submit'])) {

    echo $_POST['nama'];
}


?>

<!-- <form action="get.php" method="get"> -->
<form action="profile.php" method="get">
    <input type="text" name= 'nama'>
    <input type="password" name='password'>
    <input type="submit" name='submit'>
</form>