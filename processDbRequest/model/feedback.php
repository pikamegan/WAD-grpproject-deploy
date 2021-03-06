<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['type']) && isset($_POST['feedback'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $feedback = $_POST['feedback'];

    $msg = "From: " . $name . "\n Email: " . $email . "\n Type: " . $type . "\n Feedback: " . $feedback;

    $headers = 'From: $email';
    $sent = mail('intern.fyi.contact@gmail.com', 'Feedback Form Submission', $msg, $headers);
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- vue -->
    <script src="https://unpkg.com/vue@next"></script>
    <title>Feedback Submission Status</title>
  </head>
  <body>
    <?php
if ($sent) {
    echo "<script>alert('Feedback submitted successfully!')
    window.location.assign('../../HTML/feedback.php')
    </script>";
    exit;
} else {
    echo "<script>console.log('Feedback was not successful')</script>";
    exit;
}
?>
</body>
</html>