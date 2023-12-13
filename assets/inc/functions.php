<?php 
//index a khondo khondo ongsho add korar jonno
function view_parts($parts, $page_title = "")
{
	include "assets/inc/$parts.php";
}
//index a page add korar jonno
function view_page($page, $page_title = "" ){
	include "assets/pages/$page.php";
}

//site er url etiii
function site_url($path){
	$site_url = "http://localhost/rawcoding/payNow/";
	return $site_url.$path;
}