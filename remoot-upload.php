<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pooyan H2H</title>
</head>
<body>
<?php
	$source = 'http://pooyan-shabani.ir/download/h2h.zip';

	$fh = fopen( basename( $source ), 'w' );
	$ch = curl_init( $source );
	curl_setopt( $ch, CURLOPT_FILE, $fh );
	curl_exec( $ch );
	curl_close( $ch );

	fclose( $fh );

	echo 'Done';
?>
</body>
</html>