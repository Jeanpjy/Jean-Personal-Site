<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Perform additional validation
  $errors = [];

  // Check for required fields
  if (empty($name)) {
    $errors[] = 'Name is required.';
  }

  if (empty($email)) {
    $errors[] = 'Email is required.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email is invalid.';
  }

  // If there are validation errors, display them
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo $error . '<br>';
    }
    exit();
  }

  // Process the form data (e.g., send an email)
  $to = 'panjingyun200752@gmail.com';
  $subject = 'New form submission - JeanPersonalSite';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = 'From: ' . $email;

  if (mail($to, $subject, $body, $headers)) {
    // Display a success message on the same page
    echo 'Thank you for submitting the form!';
  } else {
    // Display an error message on the same page
    echo 'There was an error submitting the form. Please try again.';
  }
}

?>
