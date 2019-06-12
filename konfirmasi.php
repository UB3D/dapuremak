
<?php
$nama=$_POST["name"];
$email=$_POST["email"];
$komentar=$_POST["isi"];
mysql_connect("localhost","root","");
mysql_select_db("komentar");
$result=mysql_query("insert into data values('null','$nama','$email','$komentar')");
if ($result){
	echo "<script>alert('Data berhasil disimpan!');history.go(-1);</script>";
}
?>

