<?php

$conn = mysql_connect("localhost","root","");
mysql_select_db("bpa", $conn);

$id = urlencode($_GET['id']);

mysql_query("DELETE FROM articles WHERE id=" . $id);

?>

<meta http-equiv="refresh" content="0;url=http://localhost/bpa_2007/index2.php?page=user"/>