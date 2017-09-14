<?php



var_dump(is_SSL());
	echo 'PHP Email';
	$to = 'huang_wentai@126.com';
	$subject = 'PHP Email';
	$message = 'My First Email!';
	$from = 'someone@example.com';
	$header = 'From: ' . $from;
	mail($to, $subject, $message, $header);
	echo "Mail Sent.";


function is_SSL(){  
if(!isset($_SERVER['HTTPS']))  
return FALSE;  
 if($_SERVER['HTTPS'] === 1){  //Apache  
  return TRUE;  
 }elseif($_SERVER['HTTPS'] === 'on'){ //IIS  
  return TRUE;  
 }elseif($_SERVER['SERVER_PORT'] == 443){ //ÆäËû  
  return TRUE;  
 }  
 return FALSE;  
}  

?>