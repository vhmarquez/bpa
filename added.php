<?
	error_reporting(6143);
	if ((!$_POST['title']) || (!$_POST['vid_art']) || (!$_POST['safe_title']) || (!$_POST['blurp']) || (!$_POST['article'])
	 || (!$_POST['auth'])) {
		die("<h1>Content not posted!!</h1> <p>All fields must be filled in.</p>");
	} else {
	
	$title = stripslashes($_POST['title']);
	$vidart = $_POST['vid_art'];
	$safe = $_POST['safe_title'];
	$blurp = stripslashes($_POST['blurp']);
	$article = stripslashes($_POST['article']);
	$date = date("F j, Y");
	$auth = stripslashes($_POST['auth']);
	
	$sql = "INSERT INTO articles (title, vid_art, safe_title, blurp, article, date_sub, auth) VALUES ('$title', '$vidart', '$safe', '$blurp', '$article', '$date', '$auth')";
	
	mysql_query($sql);	
?>

                        
<h1>Content Added</h1>

<p><? echo "$_POST[vid_art]"; ?> <strong><? echo "$_POST[title]"; ?></strong>, submited by <em><? echo "$_POST[auth]"; ?></em> on <em><? echo "$date"; ?></em>, has been posted.</p>                   
<p><a href="<?=$addLnk?>">Add more content</a></p>

<?
}
?>