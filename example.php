<?php

// include the class file
include_once 'style.class.php';

// Call Static Function From Class
DirList::List(__DIR__, __FILE__, $_SERVER['PHP_SELF']);
