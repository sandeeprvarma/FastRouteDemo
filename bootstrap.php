<?php
spl_autoload_register(function ($class) {
	if(file_exists('app/' . strtolower($class) . '.php')) {
		include 'app/' . strtolower($class) . '.php';
	}
});