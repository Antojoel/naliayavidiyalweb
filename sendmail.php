<?php



use PHPMailer\PHPMailer\PHPMailer;


require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name =$_post['name'];
  $gender =$_post['gender'];
  $date_of_birth =$_post['date of birth'];
  $education =$_post['education'];
  $occupation =$_post['occupation'];
  $blood_group =$_post['blood group'];
  $mobile_no =$_post['mobile no'];
  $email_id =$_post['email id'];
  $physically_challenged =$_post['physically challenged'];

  try{
    $mail->isSMTP();
    $mail->HOST = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nalaiyavidiyalhost@gmail.com';
    $mail->Password = 'Abcd1234.';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->port = '587';

    $mail->setfrom('nalaiyavidiyalhost@gmail.com');
    $mail->addAddress('antojoel8020@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (contact Page)';
    $mail->Body = "<h3>Name : $name <br>Gender : $gender <br>Date of birth : $date_of_birth <br>Education : $education <br>Occupation : $occupation 
    <br>Blood group : $blood_group <br>Mobile no : $mobile_no <br>Email id : $email_id <br>Physically challenged : $physically_challenged</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                <span>Message sent! Thank you for contacting us.</span>
              </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';  
    
  }

}
?>