<?php 
	require_once 'conf/init.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet/less" type="text/css" href="style/main.less" />
		<script type="text/javascript">
			less = {
				env: "<?php echo (strtolower( APPLICATION_ENV )=='dev'?'development':'production'); ?>", // or "production"
				async: false,       // load imports async
				fileAsync: false,   // load imports async when in a page under
									// a file protocol
				poll: 1000,         // when in watch mode, time in ms between polls
				functions: {},      // user functions, keyed by name
				dumpLineNumbers: "comments", // or "mediaQuery" or "all"
				relativeUrls: false // whether to adjust url's to be relative
									// if false, url's are already relative to the
									// entry less file
			};
			
		</script>
		<script src="js/less-1.4.1.min.js" type="text/javascript"></script>
		<script data-main="js/main" src="js/require.js"></script>
        <title></title>
    </head>
    <body>
		<div id="header" ></div>
		<div id="content" >
		<?php
		echo Site::getInstance()->getContent();
		?>
		</div>
		<div id="footer" ></div>
    </body>
</html>
