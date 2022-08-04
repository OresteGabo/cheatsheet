<?php
ob_start();

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH",dirname(PRIVATE_PATH));
define("PUBLIC_PATH",PROJECT_PATH.'/public');
define("SHARED_PATH",PRIVATE_PATH.'/shared');
define("STYLESHEETS_PATH",PUBLIC_PATH.'/stylesheets');
define("IMAGES_PATH",PUBLIC_PATH.'/images');
define("SCHOOL_PATH",PUBLIC_PATH.'/school');