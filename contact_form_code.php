
<?php

//set validation error flag as false
$error = false;
if (isset($_POST['submit'])) {



//$usr_id = $_SESSION['usr_id'];
//$client_title =mysqli_real_escape_string($conn, $_POST['client_title']);
$client_name =mysqli_real_escape_string($conn, $_POST['client_name']);

//preg only allows numbers and not letters spaces or symbols to stop injection
$client_contact =preg_replace('/[^0-9]/', '', $_POST['client_contact']);
$client_email =mysqli_real_escape_string($conn, $_POST['client_email']);
if (!filter_var($client_email, FILTER_VALIDATE_EMAIL)) {
   $client_emailErr = "Invalid format and please re-enter valid email"; 
}

$notes =mysqli_real_escape_string($conn,$_POST['notes']);

//this just upper cases the first letter of each name
$client_name=ucwords($client_name);

// service erequirements linked to the checkboxes
$valuation = mysqli_real_escape_string($conn, $_POST['status']);
$property_alert =
$mortgage =
$survey =




 if (!$error) {  ///////database entry change as required///////

    /*    if(mysqli_query($conn, "INSERT INTO firsts(usr_id, client_title, client_name, client_contact, client_email, notes , advisor,status) VALUES('" . $usr_id . "','" . $client_title . "',  '" . $client_name . "', '" . $client_contact . "', '" .$client_email . "',  '" . $notes . "'  ,  '" . $advisor . "' ,  '" . $status . "'     )"  )) 


*/

        {
            $successmsg = "You Successfully Registered ! <a href='index.php'>Return To Main Website</a>";
        } 



    }


 // $_SESSION['email'] = $row['email'];





    $to = $_SESSION['email']; 

    $email_subject = "  Referral of Client: $client_title $client_name \n\n";
    $email_body = "New Customer!\nPlease call them now to help.\r\n" 

     

        ."Here are the details:\n\n Name: $client_title  $client_name \n\n "
        ."Email: $client_email\n\n Contact: $client_contact\n\n Message: $notes";
    
        ."also need to put in which services they require i.e   

                $valuation $property_alert $mortgage $survey       ";

    $headers = "From: introagents.co.uk\r\n" .
     "X-Mailer: php" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
    $headers .="BCC: enquiries@introagents.co.uk\r\n";
    
    //$headers= 'Reply-To: no-reply@introagents.co.uk' . "\r\n" . 
    	     
  
    mail($to,$email_subject,$email_body,$headers);



}


?>