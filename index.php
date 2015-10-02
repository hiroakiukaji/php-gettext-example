<?php
// I18N support information here
$language = 'ja_JP.UTF-8';

putenv("LC_ALL=$lang");
setlocale(LC_ALL, $language);

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "./locale");
textdomain($domain);

echo _('hello world');
