<?php
$flag = "CASPER{Y0U_ENcHAnT_ThE_HAsH!}";
$input = $_GET['flag'];
if(md5("240610708") == sha1($input){
	echo "CASPER{Y0U_ENcHAnT_ThE_HAsH!}";
}
else{
	echo "Nope";
}
?>
