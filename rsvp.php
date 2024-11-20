<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $company_name = $_POST['company-name'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $contact_number = $_POST['contact-number'];
    $whatsapp = $_POST['whatsapp'];
    $beverages = isset($_POST['beverage1']) ? implode(", ", $_POST['beverage1']) : "No preference";
    $attendance = $_POST['attendance'];

    // Set the recipient email address (your Gmail address)
    $to = "anmolcheema988@gmail.com"; 

    // Set the subject of the email
    $subject = "RSVP for DigitalWorks VIP Hollywood Glamour Party";

    // Create the email content
    $message = "
    <html>
    <head>
    <title>RSVP Details</title>
    </head>
    <body>
    <h2>RSVP Details</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Company Name:</strong> $company_name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Designation:</strong> $designation</p>
    <p><strong>Contact Number:</strong> $contact_number</p>
    <p><strong>WhatsApp Number:</strong> $whatsapp</p>
    <p><strong>Beverage Preferences:</strong> $beverages</p>
    <p><strong>Attendance:</strong> $attendance</p>
    </body>
    </html>
    ";

    // Set the headers for the email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n"; // Set the "From" address

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>RSVP submitted successfully!</p>";
    } else {
        echo "<p>There was an error sending your RSVP. Please try again.</p>";
    }
} else {
    echo "<p>Invalid request method.</p>";
}
?>
