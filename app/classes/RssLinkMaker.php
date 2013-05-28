<?php
  include(dirname(__FILE__).'/rsslink.php');
  chdir(dirname(__FILE__));

$linkmaker = new Rsslink();
$linkmaker->saveHtml();