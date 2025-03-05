
It often happens that we use the most common method to transfer a file from one host to another with a specific address or link.

Meaning, downloading the file and re-uploading it to other hosts, but this method may be convenient for smal size files, but if we want to transfer a large file, in addition to Internet traffic, we lose a lot of time to download and re-upload.

Transfer with php without downloading and re-uploading
To do this, we need to create a php file with the desired name in the destination host and exactly in the desired directory.
For eg. h2h.php

We need to edit the php file with the Direct Admin’s Editor, or C Panel’s Editor and include the following codes in. 


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


Now just to change the download path of the desired file in the “source” field. And put all the above code in html tags (exactly like the below example) and load the php file created from the browser.

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

After loading, you should see the message “Done”, it mens the operation has been completed successfully.
This method is used for transferring large files, complete transfer of the site to other hosts and…

Download the h2h.php file via the below button. (Zip file)

#
![readmore](https://pooyan-shabani.ir/tricks/transfer-files-to-another-without-downloading/)
