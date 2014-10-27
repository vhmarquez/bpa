quoteArray = new Array;
quoteArray[1] = "<table cellpadding='5' cellspacing='0' style='margin: 0px; padding: 0px;'><tr><td align='center'><a href='index.php?page=vid_art&id=4'><img src='images/Video/save_the_planet.jpg' alt='Save the Planet' /></a></td><td align='center'><a href='index.php?page=vid_art&id=5'><img src='images/Video/jeff_corwin.jpg' alt='Anderson Cooper: Polar Bears' /></a></td><td align='center'><a href='index.php?page=vid_art&id=6'><img src='images/Video/save_green.jpg' alt='Save the Green Planet' /></a></td></tr><tr><td align='center'><p><a href='index.php?page=vid_art&id=4'>Save the Planet</a></p></td><td align='center'><p><a href='index.php?page=vid_art&id=5'>Anderson Cooper: Polar Bears</a></p></td><td align='center'><p><a href='index.php?page=vid_art&id=6'>Save the Green Planet</a></p></td></tr></table>";
quoteArray[0] = "<table cellpadding='5' cellspacing='0' style='margin: 0px; padding: 0px;'><tr><td align='center'><a href='index.php?page=vid_art&id=1'><img src='images/Article/al_gore.jpg' alt='Al Gore' /></a></td><td align='center'><a href='index.php?page=vid_art&id=2'><img src='images/Article/planet_in_peril.jpg' alt='Planet in Peril' /></a></td><td align='center'><a href='index.php?page=vid_art&id=3'><img src='images/Video/get_clean.jpg' alt='Get Clean' /></a></td></tr><tr><td align='center'><p><a href='index.php?page=vid_art&id=1'>Al Gore's Seven Point Pledge</a></p></td><td align='center'><p><a href='index.php?page=vid_art&id=2'>CNN's: Planet in Peril</a></p></td><td align='center'><p><a href='index.php?page=vid_art&id=3'>Get Clean</a></p></td></tr></table>";
quoteArray[2] = "<table cellpadding='5' cellspacing='0' style='margin: 0px; padding: 0px;'><tr><td align='center'><a href='index.php?page=vid_art&id=7'><img src='images/Video/green_day.jpg' alt='Save the Planet' /></a></td></tr><tr><td align='center'><p><a href='index.php?page=vid_art&id=7'>Green Day & NRDC: Make a difference</a></p></td></tr></table>";

topArray = new Array;
topArray[0] = "<img src='images/top_1.jpg' width='679' height='31' />";
topArray[1] = "<img src='images/top_2.jpg' width='679' height='31' />";
topArray[2] = "<img src='images/top_3.jpg' width='679' height='31' />";

var quoteNum = 0;

function quoteNext() {
	if (quoteNum < 2) {
		quoteNum++;
		elem = document.getElementById("contentImages");
		elem.innerHTML = quoteArray[quoteNum];
		elem = document.getElementById("topImage");
		elem.innerHTML = topArray[quoteNum];
	} else {
		quoteNum = 0;
		elem = document.getElementById("contentImages");
		elem.innerHTML = quoteArray[quoteNum];
		elem = document.getElementById("topImage");
		elem.innerHTML = topArray[quoteNum];
	}
}

function quotePrevious() {
	if (quoteNum > 0) {
		quoteNum--;
		elem = document.getElementById("contentImages");
		elem.innerHTML = quoteArray[quoteNum];
		elem = document.getElementById("topImage");
		elem.innerHTML = topArray[quoteNum];
	} else {
		quoteNum = 2;
		elem = document.getElementById("contentImages");
		elem.innerHTML = quoteArray[quoteNum];
		elem = document.getElementById("topImage");
		elem.innerHTML = topArray[quoteNum];
	}
}