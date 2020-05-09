<?php

$EmailTo	 = "info@groominglab.pro";
$Subject	 = "Message from Grooming Lab Professional site";
$Name		 = Trim( stripslashes( $_POST[ 'name' ] ) );
$Phone		 = Trim( stripslashes( $_POST[ 'phone' ] ) );
$Message	 = Trim( stripslashes( $_POST[ 'message' ] ) );

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

$success = mail( $EmailTo, $Subject, $Body);

if ( !$success ) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
}
