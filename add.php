<?php
if($_SESSION['admin'] == "yes") {
	 echo "
	<h1>Add Content</h1>
	<div align=\"center\">
		<form method=\"post\" action=\"index2.php?page=added\">
			<table cellpadding=\"0\" cellspacing=\"0\" style=\"padding: 0px; margin: 0px; width: 100%\">
			<tr>
				<td align=\"left\">
					<p>Title:<br />
						<input type=\"text\" name=\"title\" />
					</p>
				</td>
				<td align=\"left\">
					<p>Type of article submited:<br />
						<input type=\"radio\" name=\"vid_art\" value=\"Video\" checked=\"checked\" /> Video
						<input type=\"radio\" name=\"vid_art\" value=\"Article\" /> Article  
					</p>
				</td>
			</tr>
			<tr>
				<td colspan=\"2\" align=\"left\">
					<p>Image name:<br />
						<input type=\"text\" name=\"safe_title\" />
					</p>
				</td>
			</tr>
			<tr>
				<td colspan=\"2\" align=\"left\">
					<p>Excerpt:<br />
						<textarea name=\"blurp\" wrap=\"virtual\" style=\"width: 100%; height: 75px;\"></textarea>
					</p>
				</td>
			</tr>
			<tr>
				<td colspan=\"2\" align=\"left\">
					<p>Full Article:<br />
						<textarea name=\"article\" wrap=\"virtual\" style=\"width: 100%; height: 150px;\"></textarea>
					</p>
				</td>
			</tr>
			<tr>
				<td colspan=\"2\" align=\"left\">
					<p>Submited By:<br />
						<input type=\"text\" name=\"auth\" />
					</p>
				</td>
			</tr>
			<tr>
				<td colspan=\"2\" align=\"left\">
				<p>
					<input type=\"submit\" name=\"submit\" value=\"Add Content\" />
				</p>
				</td>
			</tr>
			</table>
		</form>
	</div>
";
} else {
	 die("<h1>Restricted Access!</h1>
	 <p>You do not have access to this section. Sorry for any inconvinience.");
}

?>