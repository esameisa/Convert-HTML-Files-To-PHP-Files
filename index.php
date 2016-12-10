<?php

	/*!
	* My Name is: Esam Ahmed Eisa
	* Mobile Number: (+2) 010-989-50608
	* Email: support@esameisa.com
	* Website: http://www.esameisa.com
	* Convert HTML Files To PHP Files v1.0 (https://github.com/esameisa/Convert-HTML-Files-To-PHP-Files)
	* Copyright 2013-2017 Eisa Design, Inc.
	*/

	/*!
	* Change htmlfiles in: $dir = 'htmlfiles/'
	* htmlfiles is the pass of directory who contain html file.
	*/

	$dir    = 'htmlfiles/';
	$files1 = scandir($dir, 1);

	foreach ($files1 as $key => $value) {
		if (strpos($value, '.php') !== false) {
			$html_to_php_convert = str_replace("php","html",$value);
			$full_link = $dir . $html_to_php_convert;
			$old_link = $dir . $value;
			rename($old_link, $full_link);
		}
	}

?>
