<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA PEGAWAI</title>
</head>
<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			color: #333;
		}
h1 {
		color: #008080;
		text-align: center;
		margin-top: 50px;
		margin-bottom: 30px;
	}

	form {
		background-color: #fff;
		border: 1px solid #ddd;
		padding: 20px;
		border-radius: 5px;
		box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		width: 500px;
		margin: 0 auto;
	}

	input[type="text"] {
		padding: 10px;
		border-radius: 5px;
		border: 1px solid #ccc;
		width: 100%;
		font-size: 16px;
		margin-bottom: 20px;
	}

	input[type="submit"] {
		padding: 10px 20px;
		background-color: #008080;
		color: #fff;
		border: none;
		border-radius: 5px;
		font-size: 16px;
		cursor: pointer;
	}

	input[type="submit"]:hover {
		background-color: #006666;
	}

	table {
		margin-top: 20px;
		width: 100%;
		border-collapse: collapse;
		border: 1px solid #ddd;
		color: #333;
		font-size: 16px;
	}

	table th, table td {
		padding: 10px;
		text-align: left;
		border: 1px solid #ddd;
	}

	table th {
		background-color: #008080;
		color: #fff;
	}

	table tr:nth-child(even) {
		background-color: #f2f2f2;
	}
</style>
<body>
    <center>
	<h1>TAMBAH DATA PEGAWAI</h1>
	<form method="post" action="tugas3tambahact.php">
		<table>
			<tr>			
				<td>Nama : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Alamat : </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No Telephone : </td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
            </tr>		
		</table>
	</form>
    </center>       
</body>
</html>