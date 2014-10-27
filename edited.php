<?

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("bpa", $conn);
	
	$id = urlencode($_GET['id']);
	mysql_query("DELETE FROM articles WHERE id=" . $id);
	
	if ((!$_POST['title']) || (!$_POST['auth']) || (!$_POST['blurp']) || (!$_POST['article']) || (!$_POST['safe_title']) || (!$_POST['vid_art'])) {
		die("<h2>Content not edited!!</h2> <br /> <p>All fields must be filled in.</p>");
	}
	
	$title = $_POST['title'];
	$auth = $_POST['auth'];
	$blurp = stripslashes($_POST['blurp']);
	$date_sub = $_POST['date_sub'];
	$vid_art = $_POST['vid_art'];
	$safe = $_POST['safe_title'];
	$article = $_POST['article'];
	mysql_query("INSERT INTO articles (title, auth, blurp, date_sub, vid_art, safe_title, article) VALUES ('$title', '$auth', '$blurp', '$date_sub', '$vid_art', '$safe', '$article')");	

?>
<h1>Content Edited</h1>
<p><? echo "$_POST[vid_art]"; ?> <strong><? echo "$_POST[title]"; ?></strong>, submited by <em><? echo "$_POST[auth]"; ?></em> on <em><? echo "$date"; ?></em>, has been posted.</p>