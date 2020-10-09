<?php

    $to = "alina.kasiuk@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	$message ='<table style="width:100%">
        	<tbody><tr>
        	        <td>'.$name.'</td>
        	</tr>
       	 <tr><td>Email: '.$email.'</td></tr>
	</tbody></table>';
	if (@mail($to, $email, $message, $headers))
	{
   		 echo 'The message has been sent.';
	}else{
  		  echo 'failed';
	}



?>
