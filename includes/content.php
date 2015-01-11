<?php

$page = 'freehost';

if($page == 'about') {
	include 'about.php';
}
if($page == 'status') {
	include 'status.php';
}
if($page == 'freehost') {
	include 'freehost.php';
}
if($page == 'premiumhost') {
	include 'premiumhost.php';
}
if($page == 'design') {
	include 'design.php';
}
if($page == 'contact') {
	include 'contact.php';
}
?>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){ 
		loadXMLDoc();
	});
</script>
<div id="contentSection">
	<h2>CONTENT GOES HERE</h2>
</div>