<?php
$email = $_POST['email'];

// Open the file in append mode
$file = fopen("C:/Users/Vaishnavi/OneDrive/Documents/Delizia Napo/Delizia_napo.com/emails.txt", 'a');

// Append the email address to the file
fwrite($file, $email . "\n");

// Close the file
fclose($file);

// Redirect back to the registration page
header("Location: index.html");
?>

