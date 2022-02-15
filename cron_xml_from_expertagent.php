<?php

// xml_feed.php  also does the same but it has a button to manually upload the property. 

// define some variables
//$local_file = 'local.zip';
//$server_file = 'server.zip';

$ftp_server = "ftp.expertagent.co.uk";
$ftp_user_name = "WilliamsEstateAgents";
 $ftp_user_pass = "KMPb39i9";
 $local_file = "save.xml";
$server_file = "properties2.xml";



//connect
$ftp_server="ftp.expertagent.co.uk";
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server");



if (!ftp_connect($ftp_server))
echo "not connected";
else
echo "successfully connected";
  
// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);


// turn passive mode on
ftp_pasv($conn_id, true);


// try to download $server_file and save to $local_file
if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
    echo "Successfully written to $local_file\n";
} else {
    echo "There was a problem\n";
}

// close the connection
ftp_close($conn_id);




?>