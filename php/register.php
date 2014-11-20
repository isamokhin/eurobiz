<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];

    $to = 'ihorsam@gmail.com';    
    $subject = 'Хтось зареєструвався на захід';
    $body = "Detail:<br><br>			
            Ім'я: <strong>$name</strong><br>   
            Email: <strong>$email</strong><br>          
            Телефон: <strong>$phone</strong><br>
            Місто: <strong>$city</strong><br>           
            ";

    $headers = array(); 
	$headers[] = "MIME-Version: 1.0"; 
	$headers[] = "Content-type: text/html; charset=utf-8"; 
	$headers[] = "Subject: {$subject}"; 
	$headers[] = "X-Mailer: PHP/".phpversion();
       
    $ok = mail($to, $subject, $body, implode("\r\n", $headers));
    if($ok)
        echo '1';
    else
        echo '0';
?>
