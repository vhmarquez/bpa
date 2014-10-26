<?php
	include('config.php');
	if(!isset($_REQUEST['id'])){

		if (isset($_REQUEST['video'])){
			$sql = "SELECT * FROM articles WHERE vid_art='Video'";
		} else if (isset($_REQUEST['article'])){
			$sql = "SELECT * FROM articles WHERE vid_art='Article'";
		} else {
			$sql = "SELECT * FROM articles WHERE vid_art='Article' OR vid_art='Video'";
		}

		$result = mysql_query($sql,$connection);			

		while ($row = mysql_fetch_array($result)) {
			$title = $row['title'];
			$auth = $row['auth'];
			$blurp = stripslashes($row['blurp']);
			$date_sub = $row['date_sub'];
			$vid_art = $row['vid_art'];
			$safe = $row['safe_title'];
			$id = $row['id'];
			$display_block .= "
				<div id=\"video2\" onmouseover=\"this.id = 'video'\" onmouseout=\"this.id = 'video2'\">
					<a href=\"?page=vid_art&id=\"".$id."\"><img src=\"images/".$vid_art."/".$safe.".jpg\" alt=\"".$title."\" /></a>
					<h3><a href=\"?page=vid_art&id=\"".$id."\">".$title."</a></h3>
					<p>".$blurp."</p>
					<p style=\"font: 10px Arial;\">Date Submited: <em>".$date_sub."</em></p>
					<p style=\"font: 10px Arial;\">Posted By: <strong>".$auth."</strong></p>
					<br clear=\"all\" />
				</div>";
		}
	} else if (isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$sql = "SELECT * FROM articles WHERE id = ". $id;
		$result = mysql_query($sql, $connection);

		while($row = mysql_fetch_array($result)){
			$text = $row['article'];
			$title = $row['title'];
			$auth = $row['auth'];
			$date_sub = $row['date_sub'];
			$vid_art = $row['vid_art'];
			$safe = $row['safe_title'];

			$display_block .= "<h3>".$title."</h3>".$text."<p style=\"font: 10px Arial;\">Date Submited: <em>".$date_sub."</em></p><p style=\"font: 10px Arial;\">Posted By: <strong>".$auth."</strong></p>";
		}
	}
?>
<h1>Videos and Articles<span class="top"><a href="?page=vid_art&article=1" style="margin-right: 10px;">Display Articles Only</a> | <a href="?page=vid_art&video=1" style="margin-left: 10px; margin-right: 10px;">Display Videos Only</a> | <a href="?page=vid_art&all=1" style="margin-left: 10px;">Display All</a></span></h1>
<? echo "$display_block"; ?>