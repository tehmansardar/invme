<?php
/**
 *
 * @package invm
 */
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

function invm_save_quote()
{
    $name = wp_strip_all_tags($_POST['name']);
    $email = wp_strip_all_tags($_POST['email']);
    $phone = wp_strip_all_tags($_POST['phone']);
    $about = wp_strip_all_tags($_POST['about']);
    $project = wp_strip_all_tags($_POST['project']);
    $deadlines = wp_strip_all_tags($_POST['deadlines']);
    $projectType = 'iOS app';
    $amount = wp_strip_all_tags($_POST['amount']);
    $attachment = wp_strip_all_tags($_FILES['attachment']['name']);
    $movefile = null;

    if (isset($attachment)) {
        if (!function_exists('wp_handle_upload')) {
            require_once ABSPATH . 'wp-admin/includes/file.php';
        }
        $uploadedfile = $_FILES['attachment'];

        $upload_overrides = array(
            'test_form' => false,
        );

        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

    }
    if ($movefile && !isset($movefile['error'])) {

        $movefile = $movefile['url'];

    } else {
        // echo $movefile['error'];
        $movefile = '#';
    }

    $details = '<h4>About:</h4>' . $about . '<h4>About Project:</h4>' . $project . '<h4>Dealines:</h4>' . $deadlines;

    $args = array(
        'post_title' => $name,
        'post_content' => $details,
        'post_author' => 1,
        'post_status' => 'publish',
        'post_type' => 'invm-quotes',
        'meta_input' => array(
            '_quotes_email_value_key' => $email,
            '_quotes_phone_value_key' => $phone,
            '_quotes_budget_value_key' => $amount,
            '_quotes_attachment_value_key' => $movefile,
            '_quotes_project_value_key' => $projectType,
        ),
    );

    $postID = wp_insert_post($args);

    if ($postID !== 0) {

        // $username = get_bloginfo('admin_email');
        $username = 'sccontic@gmail.com';

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
        $mail->Password = "CRUSHERstudy1";
    //Email subject
        $mail->Subject = "Inventive Media: ".$name;
    //Set sender email
        $mail->setFrom($username);
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
        $mail->addAttachment($movefile);
    //Email body
        $mail->Body = $mailBody;
    //Add recipient
        $mail->addAddress($username);
    //Finally send email
        if ( $mail->send() ) {
            echo "Email Sent..!";
        }else{
            echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
        }
    //Closing smtp connection
        $mail->smtpClose();
    }

    echo $postID;
}
