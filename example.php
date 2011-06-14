<?php
require 'selleck.php';
$t = new Selleck();

echo $t->render("index", array('name' => 'test'));

echo $t->js_template("index", "index_template");

