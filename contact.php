<?php 
if (isset($_POST['submit'])) {
    $to = "info@invisiblesecurityltd.com"; // Updated Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    
    // Output a success message
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    
    // Redirect the user to index.html
    header('Location: https://invisiblesecurityltd.com/index.html');

}
?>
