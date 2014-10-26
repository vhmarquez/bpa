<?
	$conn = mysql_connect("localhost","root","");
mysql_select_db("bpa", $conn);
	$id = $_GET['id'];
	
	$q = mysql_query("SELECT * FROM articles WHERE id=$id");
	
	$row_id = mysql_fetch_array($q);
?>

<h1>Edit Content</h1>

<div align="center">

<form method="post" action="index2.php?page=edited&id=<?=$id?>">

<table cellpadding="0" cellspacing="0" style="padding: 0px; margin: 0px; width: 100%">
<tr>
<td align="left">

<p>Title:<br />
<input type="text" name="title" value="<?=$row_id['title']?>" />
</p>

</td>
<td align="left">

<p>Type of article submited:<br />
<input type="radio" name="vid_art" value="Video" checked="checked" /> Video
<input type="radio" name="vid_art" value="Article" /> Article  
</p>
                                  
</td>
</tr>
<tr>
<td colspan="2" align="left">

<p>Image name:<br />
<input type="text" name="safe_title" value="<?=$row_id['safe_title']?>" />
</p>

</td>
</tr>
<tr>
<td colspan="2" align="left">

<p>Excerpt:<br />
<textarea name="blurp" wrap="virtual" style="width: 100%; height: 75px;"><?=$row_id['blurp']?></textarea>
</p>

</td>
</tr>
<tr>
<td colspan="2" align="left">

<p>Full Article:<br />
<textarea name="article" wrap="virtual" style="width: 100%; height: 150px;"><?=$row_id['article']?></textarea>
</p>

</td>
</tr>
<tr>
<td colspan="2" align="left">

<p>Submited By:<br />
<input type="text" name="auth" value="<?=$row_id['auth']?>" />
</p>

</td>
</tr>
<tr>
<td colspan="2" align="left">

<p>
<input type="submit" name="submit" value="Edit Content" />
</p>

</td>
</tr>
</table>

</form>
</div>