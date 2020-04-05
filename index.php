<?php
include_once 'vendor/autoload.php';

use Step\Tag;
$link = Tag::a();
$link->setAttribute('href', 'https://google.com');
echo $link;
