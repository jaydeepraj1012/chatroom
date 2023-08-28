 <?php
    //    ini_set("sendmail_from", "jaydeeprajtech@gmail.com");  
    //    $to = "mrhacks1012@gmail.com";
    //    $subject = "This is subject";  
    //    $message = "This is simple text message.";  
    //    $header = "From:sonoojaiswal@javatpoint.com \r\n";  

    //    $result = mail ($to,$subject,$message);  

    //    if( $result == true ){  
    //       echo "Message sent successfully...";  
    //    }else{  
    //       echo "Sorry, unable to send mail...";  
    //    }

    $to = "mrhacks1012@gmail.com";
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: jaydeeprajtech@gmail.com' . "\r\n" .
        'Reply-To: mrhacks1012@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
   ini_set("SMTP","localhost");
   ini_set("smtp_port","25");
   ini_set("sendmail_from","00000@gmail.com");
   ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");

    mail($to, $subject, $message, $headers);
    ?>

