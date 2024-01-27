<?php
$status_success = "";
$status_failure = "";


$subject = "";
$message = "";
$sender_name = "";
$sender_email = "";


if(isset($_POST['subject']) && $_POST['subject'] != "") {
    $subject = $_POST['subject'];
}
if(isset($_POST['message']) && $_POST['message'] != "") {
    $message = $_POST['message'];
}
if(isset($_POST['sender_name']) && $_POST['sender_name'] != "") {
    $sender_name = $_POST['sender_name'];
}
if(isset($_POST['sender_name']) && $_POST['sender_email'] != "") {
    $sender_email = $_POST['sender_email'];
}



if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  if (!empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['sender_name']) && !empty($_POST['sender_email'])){

      //Send email
      $recipient = "vault@creadar.com";
      $subject = "Creadar Message - ".$_POST["subject"];
      $body = $_POST["message"] . "\n\n" .
        "SENDER:\n" . $_POST["sender_name"] . "\n" .
        $_POST["sender_email"];
      $headers = "From: website\r\n";
      mail($recipient, htmlspecialchars($subject), htmlspecialchars($body), $headers);

      
      //Leave Message In Database
      $hostname = 'localhost';
      $username = 'creadar1_nana';
      $password = 'cr_$_020';

      try {
          $conn = new PDO("mysql:host=$hostname;dbname=creadar1_db", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $sql = "INSERT INTO messages (Subject, Message, Sender, Email) VALUES ('".$_POST['subject']."','".$_POST['message']."','".$_POST['sender_name']."','".$_POST['sender_email']."')";

          if ($conn->query($sql)) {
            $status_success = "Message Delivered.";

            // Reset the posted values to prevent them from being available in the fields later
            foreach ($_POST as $k=>$v) {
                $_POST[$k] = "";
            }
            
          }
          else{
            $status_failure = "<span class='msg' href='#' data-toggle='modal' data-target='#message-form'>&larr; Message interrupted: Please resend.</span>.";
          }

          $conn = null;
      }
      catch(PDOException $e) {
          $status_failure = "Connection failed: " . $e->getMessage();
      }
  }
  else {
      $status_failure = "<span class='msg' href='#' data-toggle='modal' data-target='#message-form'>&larr; Please complete form and resend</span>.";
  }

}
?>