<?php
// I18N support information here
$lang = 'ja_JP.UTF-8';

putenv("LC_ALL=$lang");
setlocale(LC_ALL, $lang);

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "./locale");
textdomain($domain);

echo _('hello world');
