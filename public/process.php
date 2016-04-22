<?php

  	if(isset($_POST["contact_submit"])){
		//field vars
		$first_name=$_POST["first_name"];
		$last_name=$_POST["last_name"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$sub=$_POST["sub"];
		$mess=$_POST["mess"];
		$extra=$_POST["extra_field"];//test condition for spam

		$submited_message="flash";

		if($extra){
  		//test for robots
		}else{

		  //email to
		  $to="studentemail@website.com";//put your email here
		  //email subject
		  $subject ="Contact request from"." ".$first_name." ".$last_name;

		  //don't mess with this section!!!
		  $header = "MIME-Version: 1.0\r\n";
		  $header .= "Content-type: text/html; charset=uft-8\r\n";
		  $header .= "Content-transfer-Encoding: 7bit\r\n";

		  //email body
		  $message ="<p>";
		  $message .="<strong>Name:</strong> {$first_name} {$last_name}<br/>";
		  $message .="<strong>Email:</strong> {$email}<br/>";
		  $message .="<strong>Phone:</strong> {$phone}<br/><br/>";
		  $message .="<strong>Subject:</strong> {$sub}<br/>";
		  $message .="{$mess}<br/>";
		  $message .="</p>";


		mail($to, $subject, $message, $header);
		}
		$first_name="";
		$last_name="";
		$email="";
		$phone="";
		$sub="";
		$mess="";
	}

?>
