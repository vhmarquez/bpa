           	<h1>About Us</h1>
            <p>As a part of the Business Professionals of America, Victor M., Shaun M., and Craig V. have taken an interest in the issues regarding the environment and you. </p>

			<p>As aspiring web developers, we have developed this website to inform users of the current issues our environment is facing. Furthermore we hope to provide users with the knowledge to take action against those issues. As a team, we highly encourage our users to get involved in their communities, to find ways in which they may help make our environment a better place, so that future generations may enjoy the richness and beauty of our planet.</p>

			<p>Whether it be volunteering to plant trees, or simply saving energy in our homes, we can all do something to help with the salvation of our planet. Afterall we only have one planet, it is our resposibility to protect it to the best of our abilities. Saving our planet should be our number one priority.</p>
            
            
            <?
	include('config.php');
	if(!isset($_REQUEST['id'])){			
		if (isset($_REQUEST['video'])){
			$sql = "SELECT * FROM articles WHERE vid_art='Video'";}
		else if (isset($_REQUEST['article'])){
			$sql = "SELECT * FROM articles WHERE vid_art='Article'";}
		else {
			$sql = "SELECT * FROM articles WHERE vid_art='Article' OR vid_art='Video'";}
		
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
							
					<a href=\"?page=vid_art&id=".$id."\"><img src=\"images/".$vid_art."/".$safe.".jpg\" alt=\"".$title."\" /></a>
									
					<h3><a href=\"?page=vid_art&id=".$id."\">$title</a></h3>
					
					<p>$blurp</p>
					
					<p style=\"font: 10px Arial;\">Date Submited: <em>$date_sub</em></p>
					
					<p style=\"font: 10px Arial;\">Posted By: <strong>$auth</strong></p>
					
					<div id='video_control'>
						<a href='index2.php?page=edit&id=$id'><span style='padding-right: 10px;'>Edit</span></a> | <a href='refresh.php?id=$id'>Delete</a>
					</div>
					
					<br clear=\"all\" />
							
				</div>";
		}
	}
	else if (isset($_REQUEST['id'])){
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
		
		$display_block .= "
		<h3>$title</h3>
		$text
		<p style=\"font: 10px Arial;\">Date Submited: <em>$date_sub</em></p>
		<p style=\"font: 10px Arial;\">Posted By: <strong>$auth</strong></p>
		";
		}
	}
?>

<h1 style="padding: 10px 0px;">Content Submited<span class="top"><a href="?page=user&article=1" style="margin-right: 10px;">Display Articles Only</a> | <a href="?page=user&video=1" style="margin-left: 10px; margin-right: 10px;">Display Videos Only</a> | <a href="?page=user&all=1" style="margin-left: 10px;">Display All</a></span></h1>


<? echo "$display_block"; ?>        
    