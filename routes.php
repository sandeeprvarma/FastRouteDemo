<?php

$route->addRoute('GET', 'books', 'Books/show');
$route->addRoute('GET', 'books/{id:\d+}', 'Books/showbookid');
