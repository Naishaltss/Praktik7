$conn = mysql_connect (”host”,”username”,”password”);
$pilih = mysql_select_db(”namadatabase”,$conn);
$hasil = mysql_query(”SQL Statement”);