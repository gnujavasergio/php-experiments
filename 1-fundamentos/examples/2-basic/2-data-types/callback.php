<?php

function welcome($name = "") {
	return "Hello $name";
}

var_dump(welcome);
var_dump(welcome('sergio'));
