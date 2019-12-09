<?php 

function sendmail($to, $subject, $message, $from) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";
    $headers .= 'Reply-To: ' .$from . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers)){
        return 1;
    } 
    return 0;
}

$content = nl2br("Name: ".$_POST['name']."\nPhone: ".$_POST['phone']."\nWebsite: ".$_POST['website']."\nBudget: ".$_POST['budget']."\nMessage: ".$_POST['message']);


echo sendmail('damian.zalewski1234@gmail.com', 'Victory Invest', $content, $_POST['email']);
	

?>