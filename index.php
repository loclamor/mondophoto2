<?php 
	require_once 'conf/init.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
		echo Site::getInstance()->getContent();
		?>
    </body>
</html>
