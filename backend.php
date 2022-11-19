<?php 
if(isset($_POST['submit']))
{

    $name = $_POST['yname'];
    $email=$_POST['yemail'];
    $subject=$_POST['ysubject'];
    $message=$_POST['message'];
  

    if($name !='' && $email != '' && $subject !="" && $message !=""){

        $to = 'sahunabin822@gmail.com';
        $subject = $_POST['subject'];
        $body = '<html><head><body>
        <h4>Name: '. ucfirst($name).'</h4>
        <h4>Email: '. ucfirst($email).'</h4>
        <h4>Subject: '. ucfirst($subject).'</h4>    
        <h4>Message: '.ucfirst($message).'</h4>
        <b>Sincerely,</b><br>
        <b>Real estate & Buildings</b>
        </body></html>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From:'.$_POST['email'];
        $headers .= 'Cc:surendradkdev@gmail.com';
        if(mail($to,$subject,$body,$headers))
        {
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Email sent succesfully.');
    window.location.href='index.php';
    </script>");
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Email Send Failed!');
    window.location.href='index.php';
    </script>");

        }

    }else{ 
        // echo 'All field required';
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('All field required.');
        window.location.href='index.php';
        </script>");
    }
     


}



?>