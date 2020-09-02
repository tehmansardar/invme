<?php
/**
 *
 * @package invm
 */
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;


 function restructreArray(array $arr){
    $result = [];
    foreach($arr as $key => $value){
        for($i=0; $i < count($value); $i++){
            $result[$i][$key] = $value[$i];
        }
    }
    return $result;
}



function invm_save_quote()
{   $label = '';
    $name = wp_strip_all_tags($_POST['name']);
    $email = wp_strip_all_tags($_POST['email']);
    $phone = wp_strip_all_tags($_POST['phone']);
    $about = wp_strip_all_tags($_POST['about']);
    $project = wp_strip_all_tags($_POST['project']);
    $deadlines = wp_strip_all_tags($_POST['deadlines']);
    $projectType = 'iOS app';
    $amount = wp_strip_all_tags($_POST['amount']);
    $attachment = wp_strip_all_tags($_FILES['attachment']);

    if (isset($attachment)) {
        $label = '';
        $files = [];

        $files = restructreArray($_FILES['attachment']);
        
        if(!empty($files)){
			foreach ($files as $key => $file) {
				$name = $file['name'];
				$size = $file['size'];

				$ext = end(explode(".", $name));
				$allowed_ext = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "gif", "GIF", "psd", "PSD", "xd", "XD", "ai", "AI", "pdf", "PDF", "txt", "TXT", "docx", "DOCX", "csv", "CSV", "xlsx", "XLSX");

				if(in_array($ext, $allowed_ext)){
					if($size > 5242880){
						echo $label = $name . " file size greater than 5MB";
						die;
					}
				}else{
                    echo $label =  $ext . " file format Not Allowed";
                    die;
				}
			}
		}else{
            $label = '';
        }
        
    }else{
        $label = '';
    }
        // $username = get_bloginfo('admin_email');
        $username = '';
        $password = '';

        $mailBody = '<h1>Inventive media Quote</h1></br>';
        $mailBody  .= '<h4>Full Name: </h4>'.$name;
        $mailBody  .= '<h4>Email: </h4>'.$email;
        $mailBody  .= '<h4>Phone: </h4>'.$phone;
        $mailBody  .= '<h4>About '.$name.': </h4>'.$about;
        $mailBody  .= '<h4>About Project: </h4>'.$project;
        $mailBody  .= '<h4>Deadlines: </h4>'.$deadlines;
        $mailBody  .= '<h4>Project Type: </h4>'.$projectType;
        $mailBody  .= '<h4>Project Budget: </h4>'.$amount;


        //Define name spaces
        //Create instance of PHPMailer
	$mail = new PHPMailer();
    //Set mailer to use smtp
        $mail->isSMTP();
    //Define smtp host
        $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
        $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";
    //Port to connect smtp
        $mail->Port = "587";
    //Set gmail username
        $mail->Username = $username;
    //Set gmail password
        $mail->Password = $password;
    //Email subject
        $mail->Subject = "Inventive Media: ".$name;
    //Set sender email
        $mail->setFrom($username);
    //Enable HTML
        $mail->isHTML(true);

    //Attachment
    if(empty($label)){
 
        if(!empty($files)){
            foreach ($files as $key => $file) {
            
                $mail->addAttachment(
                    $file['tmp_name'],
                    $file['name']
                );
        
            }
        }

}
    
        //Email body
        $mail->Body = $mailBody;
    //Add recipient
        $mail->addAddress('sccontic@gmail.com');
    //Finally send email
        if ( $mail->send() ) {
            echo "";
        }else{
            echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
        }
    //Closing smtp connection
        $mail->smtpClose();
}
