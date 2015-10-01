<?php

if ($_GET['lang']=="ja"){
	$lang = "ja_JP.UTF-8";
	$domain = "messages";
}

setlocale(LC_ALL, $lang);
bindtextdomain($domain, "./locale/");
textdomain($domain);

// message
echo _("hello world");
