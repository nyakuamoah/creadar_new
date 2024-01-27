<?php 
// Proposal Submission Announcement
$admission_header = "";
$admission_subinfo = "";

$opening_month = 'January';
$deadline_month = 'March';

$current_month = date("m");
$current_year = date("Y");
$next_year = $current_year + 1;

if ($current_month < 4){
  $admission_header = "$current_year business incubation enrolment is open!";
  $admission_subinfo = "During the first quarter of each year, we receive incubator applications from interested candidates who would like to enroll on our incubator program.
Closing date for $current_year's proposal submissions is $deadline_month 31.";
  $button_display_value = "block";
} 
else {
  $admission_header = "$current_year business incubation applications closed on $deadline_month 31.";
  $admission_subinfo = "During the first quarter of each year, we receive applications from candidates interested in our incubator program.<br />Subsequent incubation applications opens on $opening_month 1, $next_year";
  $button_display_value = "none";
}


// Proposal Submission Form
$status_success = "";
$status_failure = "";

$proposal_title = "";
$proposal_content = "";
$candidate_name = "";
$candidate_email = "";
$candidate_phone = "";

if(isset($_POST['proposal_title']) && $_POST['proposal_title'] != "") {
    $proposal_title = $_POST['proposal_title'];
}
if(isset($_POST['proposal_content']) && $_POST['proposal_content'] != "") {
    $proposal_content = $_POST['proposal_content'];
}
if(isset($_POST['candidate_name']) && $_POST['candidate_name'] != "") {
    $candidate_name = $_POST['candidate_name'];
}
if(isset($_POST['candidate_email']) && $_POST['candidate_email'] != "") {
    $candidate_email = $_POST['candidate_email'];
}
if(isset($_POST['candidate_phone']) && $_POST['candidate_phone'] != "") {
    $candidate_phone = $_POST['candidate_phone'];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  if (!empty($_POST['proposal_title']) && !empty($_POST['proposal_content']) && !empty($_POST['candidate_name']) && !empty($_POST['candidate_email']) && !empty($_POST['candidate_phone'])){

      //Send email
      $recipient = "vault@creadar.com";
      $subject = date("Y") . " Incubator Proposal - " . $_POST["candidate_name"];
      $body = "TITLE:\n" . $_POST["proposal_title"] . "\n\n" .
        "CONTENT:\n" .$_POST["proposal_content"] . "\n\n\n" .
        "CANDIDATE:\n" . $_POST["candidate_name"] . "\n" .
        $_POST["candidate_email"] . "\n" .
        $_POST["candidate_phone"];
      $headers = "From: website\r\n";
      mail($recipient, htmlspecialchars($subject), htmlspecialchars($body), $headers);

      //Copy proposal to Database
      $hostname = 'localhost';
      $username = 'creadar1_nana';
      $password = 'cr_$_020';

      try {
          $conn = new PDO("mysql:host=$hostname;dbname=creadar1_db", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $sql = "INSERT INTO enrolment_proposals (ProposalTitle, ProposalContent, CandidateName, CandidateEmail, CandidatePhone, TermsAndConditions) VALUES ('".$_POST['proposal_title']."','".$_POST['proposal_content']."','".$_POST['candidate_name']."','".$_POST['candidate_email']."','".$_POST['candidate_phone']."','Agreed')";

          if ($conn->query($sql)) {
            $status_success = "Proposal submitted.";

            // Reset the posted values to prevent them from being available in the fields later
            foreach ($_POST as $k=>$v) {
                $_POST[$k] = "";
            }

          }
          else{
            $status_failure = "<span class='msg' href='#' data-toggle='modal' data-target='#proposal-form'>&larr; Submission interrupted: Please resend.</span>.";
          }
          $conn = null;
      }
      catch(PDOException $e) {
          $status_failure = "Connection failed: " . $e->getMessage();
      }
  }
  else {
      $status_failure = "<span class='msg' href='#' data-toggle='modal' data-target='#proposal-form'>&larr; Please complete form and resend.</span>.";   
  }
}

?>