<?php
// require_once "src/app/Main.php";
require "vendor/autoload.php";

use App\Main;

$main = new Main();
echo $main->getMessage();
echo "hello world";
