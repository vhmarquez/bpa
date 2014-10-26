<?
$db_name = "vmarquez_bpa";
$table_name = "articles";

$connection = mysql_connect("localhost", "vmarquez_bpa", "1Ig6r*,-Mup|");
$result = mysql_select_db($db_name, $connection);

//LINKS
$homeLnk = 'index.php?page=home';
$enviroLnk = 'index.php?page=enviro';
$helpLnk = 'index.php?page=help1';
$articleLnk = 'index.php?page=vid_art&all=1';
$faqLnk = 'index.php?page=faq';
$contactLnk = 'index.php?page=contact';

//FAQ LINKS
$faqLnk1 = 'index.php?page=faq1';
$faqLnk2 = 'index.php?page=faq2';
$faqLnk3 = 'index.php?page=faq3';

//USER
$loginLnk = 'index.php?page=main_login'; 
$logoutLnk = 'index.php?page=logout';
$u_homeLnk = 'index2.php?page=user';

//ADD
$addLnk = 'index2.php?page=add';
?>