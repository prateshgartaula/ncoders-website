< ?php
					$User_name=$_POST['name'];
					$User_email=$_POST['email'];
					$User_phone=$_POST['phone'];
					$User_message=$_POST['message'];

					$email_from = 'ncoders.com.np'; 
					$email_subject = 'New Form Submission'; 
					$email_body = "Name: $User_name.\n".
								   "Phone no: $User_email.\n".
								   "Email Id: $User_phone.\n".
								   "User message:$User_message .\n";

					$to_email = "prateshgartaula@gmail.com";
					$headers = "From:  $email_from  \r\n";
					$headers .= "Reply-To:  $user_email  \r\n";

					
						mail($to_email,$email_subject,$email_body,$headers);
						
					header("Location: index.html");
					


					
					?>