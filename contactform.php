<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        // $subject = $_POST['subject'];
        $telefoon = $_POST['telefoon'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "83488@glr.nl";
        $headers = "From: " . $mailFrom;
        $txt = "You have recieved an e-mail from " . $name . ".\n\n". "telefoonummer: " . $telefoon . ".\n\n" . "bericht: " . $message;

        mail($mailTo,"nieuwe afpsraak!", $txt, $headers);
        header("Location: index.php?mailsend");
    }
?>